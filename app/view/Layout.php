<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="author" content="Code">
        <meta name="description" content="<?php echo $this->getDescription(); ?>">
        <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
        <title><?php echo $this->getTitle(); ?></title>
        <?php echo $this->addHead(); ?>
    </head>
    <body>
        <!--dentro desta template pode adicionar de forma global tudo que será renderizado -->
        <div class="Header"> 
            <?php echo $this->addHeader(); ?> 
        </div>

        <div class="Main"> 
            <?php echo $this->addMain(); ?> 
        </div>
        
        <div class="Footer"> 
            <?php echo $this->addFooter(); ?> 
        </div>

    </body>
</html>