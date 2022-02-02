<div class="skills">
    <h2>Мои навыки</h2>                        
    <p>Adobe Photoshop</p>
    <div class="skill1"></div>
    <div class="skill1_2"></div>
    <p>Adobe Photoshop</p>
    <div class="skill2"></div>
    <div class="skill2_2"></div>
    <p>Adobe Photoshop</p>
    <div class="skill3"></div>
    <div class="skill3_2"></div>
    <?php echo $a, ' ', $b, ' ', $c . '<br>'; ?>
    <?php
        $a = 23;
        $b = 2;
        $c = $a * $b;
        $d = 1.2e5;
        $e = 7E-10;
        echo <<<'EOD'
            $c
            $d
            $e
        EOD;
        echo 'вывод типа переменной $t (логическая)';
        echo $t . '<br>';
        echo 'ссылка на переменную' . '<br';
        echo 'z=', $z = &$a;
    ?>
</div>