<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>

<style>.u-header {
  background-image: none;
  min-height: 95px;
}
.u-header .u-image-1 {
  margin: 22px auto 0 calc(((100% - 1140px) / 2) + 36px);
}
.u-header .u-logo-image-1 {
  max-width: 246px;
  max-height: 246px;
}
.u-header .u-menu-1 {
  margin: -45px calc(((100% - 1140px) / 2) + 146px) 0 auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: 0px;
  background-image: none;
  font-weight: 100;
  text-transform: none;
}
.u-block-7c79-22 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-menu-close-1 {
  height: 28px;
  margin: 20px 20px 0 208px;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
  margin-top: 20px;
  margin-bottom: 0;
}
.u-block-7c79-23 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-btn-1 {
  border-style: none;
  font-size: 0.9375rem;
  background-image: none;
  font-weight: normal;
  margin: -42px calc(((100% - 1140px) / 2) + 8px) 0 auto;
  padding: 11px 10px 12px;
}
.u-header .u-text-1 {
  margin: -43px 0 0 calc(((100% - 1140px) / 2) + 1158px);
}
.u-header .u-rotation-parent-1 {
  width: 16px;
  height: 16px;
  margin: -19px calc(((100% - 1140px) / 2) + -54px) 45px auto;
}
.u-header .u-shape-1 {
  height: 16px;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    width: 200px;
    height: 32px;
    margin-left: calc(((100% - 1140px) / 2) + 123px);
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: 20px;
    margin-right: auto;
    margin-left: calc(((100% - 1140px) / 2) + 123px);
  }
  .u-header .u-menu-close-1 {
    margin-right: 0;
    margin-left: 28px;
  }
  .u-header .u-btn-1 {
    margin-top: 20px;
    margin-right: auto;
    margin-left: calc(((100% - 1140px) / 2) + 123px);
  }
  .u-header .u-text-1 {
    margin-top: 20px;
    margin-right: auto;
    margin-left: calc(((100% - 1140px) / 2) + 123px);
  }
  .u-header .u-rotation-parent-1 {
    width: 33px;
    margin-top: -19px;
    margin-right: calc(((100% - 1140px) / 2) + -82px);
  }
}
@media (max-width: 991px) {
  .u-header .u-image-1 {
    margin-left: calc(((100% - 1140px) / 2) + 233px);
  }
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 253px);
    margin-left: auto;
  }
  .u-header .u-menu-close-1 {
    margin-left: 0;
  }
  .u-header .u-btn-1 {
    margin-left: calc(((100% - 1140px) / 2) + 290px);
  }
  .u-header .u-text-1 {
    margin-right: calc(((100% - 1140px) / 2) + 210px);
    margin-left: calc(((100% - 1140px) / 2) + 233px);
  }
  .u-header .u-rotation-parent-1 {
    margin-right: calc(((100% - 1140px) / 2) + 28px);
  }
}
@media (max-width: 767px) {
  .u-header .u-image-1 {
    margin-left: calc(((100% - 1140px) / 2) + 323px);
  }
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 220px);
  }
  .u-header .u-btn-1 {
    margin-left: calc(((100% - 1140px) / 2) + 323px);
  }
  .u-header .u-text-1 {
    margin-right: calc(((100% - 1140px) / 2) + 300px);
    margin-left: calc(((100% - 1140px) / 2) + 323px);
  }
  .u-header .u-rotation-parent-1 {
    margin-right: calc(((100% - 1140px) / 2) + 118px);
  }
}
@media (max-width: 575px) {
  .u-header {
    min-height: 273px;
  }
  .u-header .u-image-1 {
    margin-left: calc(((100% - 340px) / 2) + 23px);
  }
  .u-header .u-menu-1 {
    margin-top: -42px;
    margin-right: calc(((100% - 340px) / 2) + 49px);
  }
  .u-header .u-btn-1 {
    margin-top: 26px;
    margin-left: calc(((100% - 340px) / 2) + 23px);
  }
  .u-header .u-text-1 {
    width: auto;
    margin-top: -36px;
    margin-right: calc(((100% - 340px) / 2) + -147px);
    margin-left: calc(((100% - 340px) / 2) + 170px);
  }
  .u-header .u-rotation-parent-1 {
    margin-top: -21px;
    margin-right: calc(((100% - 340px) / 2) + 89px);
    margin-bottom: 60px;
  }
}</style>
