/* Header Language Dropdown */
const langDropdownBtn = document.querySelector("#lang-dropdown-btn");

// Button has been clicked
langDropdownBtn.addEventListener("click", showLangOptions);

function showLangOptions() {
  let langOptions = document.querySelector("#lang-options");
  let flagChevron = document.getElementById("flag-chevron");

  if(langOptions.classList.contains('hidden')){
    // Rotate chevron
    flagChevron.classList.replace('rotate-0', 'rotate-180');
    // Show #langOptions
    langOptions.classList.remove('hidden');
  } else {
    langOptions.classList.add('hidden');
    flagChevron.classList.replace('rotate-180', 'rotate-0');
  }

}


/* Frontpage */
const frontH1 = document.querySelector("#frontH1");

// If #frontH1 is present
if(frontH1 !== null)
{
  frontH1.addEventListener("click", frontH1Click);
}

function frontH1Click() {
  // Frontnav, ul li
  const frontNav = document.querySelector("#frontNav").children[0].children;

  if(frontH1.classList.contains('md:text-9xl')) {
    // H1: Change font size and color
    frontH1.classList.replace('md:text-9xl', 'text-5xl');
    frontH1.classList.replace('text-primaryBlack-900', 'text-primaryBlack-100');

    // Loop through frontnav <li>. Change position
    for (let i = 0; i < frontNav.length; i++) {
      if(i == 0)
      {
        setTimeout(() => {
          frontNav[i].classList.replace('top-45p', 'top-0');
          frontNav[i].classList.replace('left-30p', 'left-0');
          frontNav[i].classList.replace('opacity-0', 'opacity-100');
        }, 100);
      }
      if(i == 1)
      {
        setTimeout(() => {
          frontNav[i].classList.replace('top-45p', 'top-0');
          frontNav[i].classList.replace('right-47p', 'right-0');
          frontNav[i].classList.replace('opacity-0', 'opacity-100');
        }, 400);

      }
      if(i == 2)
      {
        setTimeout(() => {
          frontNav[i].classList.replace('bottom-30p', 'bottom-0');
          frontNav[i].classList.replace('left-30p', 'left-0');
          frontNav[i].classList.replace('opacity-0', 'opacity-100');
        }, 600);
      }
    }

  } else {
    frontH1.classList.replace('text-5xl', 'md:text-9xl');
    frontH1.classList.replace('text-primaryBlack-100', 'text-primaryBlack-900');
    // Loop through frontnav <li>
    for (let i = 0; i < frontNav.length; i++) {
      if(i == 0)
      {
        frontNav[i].classList.replace('top-0', 'top-45p');
        frontNav[i].classList.replace('left-0', 'left-30p');
        frontNav[i].classList.replace('opacity-100', 'opacity-0');
      }
      if(i == 1)
      {
        frontNav[i].classList.replace('top-0', 'top-45p');
        frontNav[i].classList.replace('right-0', 'right-47p');
        frontNav[i].classList.replace('opacity-100', 'opacity-0');
      }
      if(i == 2)
      {
        frontNav[i].classList.replace('bottom-0', 'bottom-30p');
        frontNav[i].classList.replace('left-0', 'left-30p');
        frontNav[i].classList.replace('opacity-100', 'opacity-0');
      }
    }
  }
}

// Social Button
const socialBtn = document.querySelector("#socialBtn");

if(socialBtn !== null)
{
  socialBtn.addEventListener("click", socialBtnClick);
}

function socialBtnClick() {
  const socialList = document.getElementById("socialList");
  socialList.classList.toggle('opacity-0');
  socialList.classList.replace('top-0', 'top-28');
  socialList.classList.replace('left-30p', 'left-13p');


}

/* Playnavbar */
const playNavbar = document.querySelector("#playNavbar");

if(playNavbar !== null)
{
  // Main Div
  let main = document.getElementById("main");
  /* Play button */
  playNavbar.addEventListener("click", playNavbarClick);
  function playNavbarClick()
  {
    // Blur bg
    main.classList.toggle("bg-blurred");
    // Show Menu
    if (playNavbar.classList.contains('playNavbar-active') == false)
    {
      // Main navbar button
      playNavbar.classList.add('playNavbar-active');
      // Change icon
      playNavbar.children[0].children[0].setAttribute('d', 'M6 18L18 6M6 6l12 12');
      // position ul li
      for (let i = 0; i < playNavbar.children[1].children.length; i++)
      {
        if(i == 0)
        {
          playNavbar.children[1].children[i].classList.replace('opacity-0', 'opacity-100');
          playNavbar.children[1].children[i].classList.replace('top-full', 'top-70p');
          playNavbar.children[1].children[i].classList.replace('left-1','left-6');
        }
        if(i == 1)
        {
          playNavbar.children[1].children[i].classList.replace('opacity-0', 'opacity-100');
          playNavbar.children[1].children[i].classList.replace('top-full', 'top-80p');
          playNavbar.children[1].children[i].classList.replace('left-1','left-36');
        }
      }
    } else {
      playNavbar.classList.remove('playNavbar-active');
      // Change icon
      playNavbar.children[0].children[0].setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
      for (let i = 0; i < playNavbar.children[1].children.length; i++)
      {
        if(i == 0)
        {
          playNavbar.children[1].children[i].classList.replace('opacity-100', 'opacity-0');
          playNavbar.children[1].children[i].classList.replace('top-70p', 'top-full');
          playNavbar.children[1].children[i].classList.replace('left-6','left-1');
        }
        if(i == 1)
        {
          playNavbar.children[1].children[i].classList.replace('opacity-100', 'opacity-0');
          playNavbar.children[1].children[i].classList.replace('top-80p', 'top-full');
          playNavbar.children[1].children[i].classList.replace('left-36','left-1');
        }
      }
    }

  }

  /* Credits Animation */
  const credits = document.getElementById("credits");
  if(credits !== null)
  {
    document.addEventListener("DOMContentLoaded", rollCredits);

    function rollCredits(){
      let creditPos = -1000;
      let id = setInterval(frame, 30);
      function frame() {
        // Stop when screen height is reached
        if (creditPos == screen.height) {
          clearInterval(id);
          } else {
          // Pause credits
          if(main.classList.contains('bg-blurred') == false)
          {
            creditPos++;
            credits.style.bottom = creditPos + "px";
          }
        }
      }
    }
  }

}
