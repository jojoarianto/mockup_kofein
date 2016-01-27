    
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML = h + ":" + m + ":" + s ;
        var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
        if (i < 10) i = "0" + i; // add zero in front of numbers < 10
        return i;
    }

    var firstHits = 0;
    $(document).ready(function(){
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});

		startTime();

        syncJawaban();

        $('input').on('ifClicked', function(event){
            if ($(this).is(':checked')) {
                $(this).iCheck('uncheck');
            }
        });

        $('input').on('ifChecked', function(event){
            if (firstHits > 0) {
                var soal        = $(this).attr( "data-soal" );
                var opsi        = $(this).attr( "data-opsi" );
                var formData    = {no_soal:soal, no_opsi:opsi};
                var $root       = $("meta[name='root-url']").attr('content');

                $.ajax({
                    url         : $root + 'ujian/save_jawaban',
                    type        : "POST",
                    data        : formData,
                    success     : function(data, textStatus, jqXHR){
                        // call function to render butir soal terjawab
                        renderSoalTerjawab();
                        toastr.info('Jawaban no '+soal+' tersimpan');
                    },
                    error       : function(jqXHR, textStatus, errorThrown){
                        alert("Please refresh your browser! Error Massages " + errorThrown);
                    },
                });
            }

        });

        renderSoalTerjawab();

        var t = setTimeout(cek_time, 3000);

        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "1000",
          "hideDuration": "1000",
          "timeOut": "3000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        };

    });

    function renderSoalTerjawab(){
        var $root       = $("meta[name='root-url']").attr('content');

        $.ajax({
            url         : $root + 'ujian/render_butir_terjawab',
            success     : function(data, textStatus, jqXHR){
                // call function to render butir soal terjawab
                var n_soal = parseInt( $('#n_soal').html() );
                var n_terjawab = parseInt( $('#n_terjawab').html() );
                $('#n_terjawab').html(data);
                $('#n_belum_terjawab').html(n_soal - data);
            },
            error       : function(jqXHR, textStatus, errorThrown){
                alert("Please refresh your browser! Error Massages " + errorThrown);
            },
        });
    }

    function syncJawaban(){
        var $root       = $("meta[name='root-url']").attr('content');

        $.ajax({
            url         : $root + 'ujian/get_all_jawaban_user',
            success     : function(data, textStatus, jqXHR){
                $.each($.parseJSON(data), function() {
                    $('input[data-soal='+this.no_soal+'][data-opsi='+this.no_opsi+']').iCheck('check');
                });
                
                if(firstHits > 0) { toastr.success('sinkronisasi berhasil'); }
                firstHits = firstHits + 1;
            },
            error       : function(jqXHR, textStatus, errorThrown){
                alert("Please refresh your browser! Error Massages " + errorThrown);
            },
        });
    }

    function logout(){
        var $root       = $("meta[name='root-url']").attr('content');
        location.replace($root + "home/");
    }

    function cek_time(){
        var $root       = $("meta[name='root-url']").attr('content');

        $.ajax({
            url         : $root + 'ujian/cek_time',
            success     : function(data, textStatus, jqXHR){
                if (data=="200"){
                    console.log(data);
                } else {
                    location.replace($root + "home/dotryout");
                }
            },
            error       : function(jqXHR, textStatus, errorThrown){
                alert("Please refresh your browser! Error Massages " + errorThrown);
            },
        });

        var t = setTimeout(cek_time, 30000);
    }

