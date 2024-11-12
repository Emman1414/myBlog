<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" href="./output.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <?php wp_head()?>
  </head>
  <body>
    <!-- HEADER -->

    <header class="header pb-3 pt-2 lg:px-[10rem] font-poppins">
      <div class="container">
        <div
          class="header__wrapper flex justify-between items-center lg:w-[75rem] pt-2 lg:mx-auto px-4 lg:px-0"
        >
          <div class="logoNav flex flex-end gap-3">
            <h2
              class="text-[30px] font-bold  hover:border-b-[0.2rem] leading-3"
            >
              BLOG
            </h2>
            <ul class="flex flex-row justify-center items-center gap-2">
                <?php wp_menu_li() ?>
            </ul>
          </div>
          <!-- DARK/LIGHT THEME -->
          <div class="toggle__theme">
            <button id="themeToggle"><i class="fa-solid fa-moon"></i></button>
          </div>
        </div>
      </div>
    </header>