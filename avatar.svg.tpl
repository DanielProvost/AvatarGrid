<svg viewBox="0 0 <?=$taille;?> <?=$taille;?>">
    <?php foreach($avatar as $y=>$col):?>
    <?php foreach($col as $x =>$color):?>
    <rect x ="<?=$x;?>" y="<?=$y;?>"
          width="1" height="1"
          fill="<?=$color;?>"></rect>
    <?php endforeach;?>
    <?php endforeach;?>
</svg>