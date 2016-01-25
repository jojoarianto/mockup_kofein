<div class="container" style="max-width: 980px;">
    <div id="page-1" class="div-soal" style="font-size:18px">
        <ol start="1">
            <!-- soal -->
            <?php if (isset($data['soal'])): ?>
                <?php foreach ($data['soal'] as $soal): ?>
                <li>
                    <h4 id="soal-<?php echo $soal->no_soal; ?>" style="font-size:18px"> 
                    <?php echo $soal->isi; ?>
                    </h4>
                    <ul class="list-unstyled">
                        <?php if (isset($data['opsi'][ $soal->no_soal ][ 1 ])): ?>
                            <?php foreach ($data['opsi'][ $soal->no_soal ] as $i => $opsi): ?>
                                <li>
                                    <input type="radio" id="input-<?php echo $soal->no_soal.'-'.$i ?>" name="iCheck-<?php echo $soal->no_soal ?>" data-soal="<?php echo $soal->no_soal ?>" data-opsi="<?php echo $i ?>">
                                    <label for="input-<?php echo $soal->no_soal.'-'.$i ?>"> 
                                        <?php echo $opsi ?>
                                    </1abel>
                                </li>
                            <?php endforeach ?>
                        <?php endif ?>
                        <!-- <li>
                            <input type="radio" id="input-1-2" name="iCheck-1" data-soal="1" data-opsi="b">
                            <label for="input-1-2"> sp<sup>2</sup>d</label>
                        </li>
                        <li>
                            <input type="radio" id="input-1-3" name="iCheck-1" data-soal="1" data-opsi="c">
                            <label for="input-1-3"> d<sup>2</sup>sp<sup>3</sup>.</label>
                        </li>
                        <li>
                            <input type="radio" id="input-1-4" name="iCheck-1" data-soal="1" data-opsi="d">
                            <label for="input-1-4"> dsp<sup>2</sup></label>
                        </li>
                        <li>
                            <input type="radio" id="input-1-5" name="iCheck-1" data-soal="1" data-opsi="e">
                            <label for="input-1-5">sp<sup>3</sup></label>
                        </li> -->
                    </ul>
                <br><br>
                </li>
                <?php endforeach ?>
            <?php endif ?>
            <!-- end of soal -->
        </ol>
    </div>
</div>