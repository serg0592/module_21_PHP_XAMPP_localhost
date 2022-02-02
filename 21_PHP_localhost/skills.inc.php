<div class="skills">
    <?php echo 'skills_content.inc.php' . '<br>'; ?>
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