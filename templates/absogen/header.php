<!doctype html> 
<html lang="en">

<head>
    <?php
    if ($siteConfig['headerInject'] != "") {
        echo base64_decode($siteConfig['headerInject']);
    }?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <title><?php if ($siteConfig['name'] != "") {
                echo $siteConfig['name'];
            } else {
                echo "Dropplets";
            } ?> | <?php echo $pageTitle; ?></title>

    <!-- Bring in the styles and scripts... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    </style>

    <link rel="stylesheet" href="/templates/absogen/styles.css" />

    <!-- Starting up the OpenGraph Tags... -->
    <!-- Search Engine -->
    <?php if ($siteConfig['OGImage'] != "") { ?>
        <meta name="image" content="<?php echo $siteConfig['OGImage']; ?>">
    <?php } ?>
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="<?php if ($siteConfig['name'] != "") {
                                        echo $siteConfig['name'];
                                    } else {
                                        echo "Dropplets";
                                    } ?> | <?php echo $pageTitle; ?>">
    <?php if ($siteConfig['OGImage'] != "") { ?>
        <meta itemprop="image" content="<?php echo $siteConfig['OGImage']; ?>">
    <?php } ?>
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php if ($siteConfig['name'] != "") {
                                            echo $siteConfig['name'];
                                        } else {
                                            echo "Dropplets";
                                        } ?> | <?php echo $pageTitle; ?>">
    <?php if ($siteConfig['OGImage'] != "") { ?>
        <meta name="twitter:image:src" content="<?php echo $siteConfig['OGImage']; ?>">
    <?php } ?>
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="<?php if ($siteConfig['name'] != "") {
                                        echo $siteConfig['name'];
                                    } else {
                                        echo "Dropplets";
                                    } ?> | <?php echo $pageTitle; ?>">
    <?php if ($siteConfig['info'] != "") { ?>
        <meta name="og:description" content="<?php echo $siteConfig['info']; ?>">
        <meta name="description" content="<?php echo $siteConfig['info']; ?>">
    <?php } ?>
    <?php if ($siteConfig['OGImage'] != "") { ?>
        <meta name="og:image" content="<?php echo $siteConfig['OGImage']; ?>">
    <?php } ?>
    <meta name="og:site_name" content="<?php if ($siteConfig['name'] != "") {
                                            echo $siteConfig['name'];
                                        } else {
                                            echo "Dropplets";
                                        } ?>">
    <meta name="og:type" content="website">
    <meta name="og:url" content="<?php if ($siteConfig['domain'] != "") {
                                            $siteConfig['domain'];
                                        } else {
                                            echo "https://github.com/johnroper100/dropplets";
                                        } ?>">
</head>

<body class="py-3 px-0 px-sm-3 d-flex min-vh-100 text-light bg-dark align-items-stretch"> 
    
    <div class="container-fluid cover-container d-flex align-items-stretch w-100 min-vh-100 mx-auto flex-column">
    <header
          id="top"
          class="align-items-md-end p-5 pb-4 px-4 px-md-5 d-flex flex-column justify-content-between flex-sm-row text-center"
        >
          <div class="float-md-start align-self-start logo">
            <a class="logo-image" href="http://absolutegeni.us/" alt="Absolute Genius"
              ><img src="/templates/absogen/img/ag_wordmark_white.svg" /><img
                class="image-hover"
                src="/templates/absogen/img/ag_wordmark.svg"
            /></a>
          </div>
          <a href="/" alt="Absolute Genius"><h3 class="mb-0"><?php echo $siteConfig['name']; ?></h3></a>
  
        </header>
        <div class="strapline p-4 text-center mx-md-5 mx-4"><?php echo $siteConfig['info']; ?></div>
        <div class="container">
            