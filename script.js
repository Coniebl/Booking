/*
  script.js
  Para ni sa front-end behaviors sa demo site. Simple lang ni nga login, logout, ug booking popup.

*/

// Kuhaon tanan nav links sa page

const navLinks = document.querySelectorAll('.nav-link');

// Kuhaon ang login form kung naa sa page
const loginForm = document.getElementById('login-form');

// Kuhaon ang logout link kung naa
const logoutLink = document.getElementById('logout-link');

// Kung naa ang login form (meaning naa ta sa login page)
if (loginForm) {
  // I-disable ang tanan nav links para di makasulod ang user kung wala pa naka-login
  navLinks.forEach(link => {
    link.setAttribute('aria-disabled', 'true'); // i-set as disabled
    link.classList.add('disabled-link'); // i-add ug style nga disabled
    link.addEventListener('click', e => { // kung mu-click siya
      e.preventDefault(); // ayaw tugoti nga mu-redirect
      alert('Please log in first.'); // ipahibaw nga mag-login usa siya

    });

  });



// Expose showForm globally so inline onclick handlers work

window.showForm = function(formId) {

  // Hide all form boxes

  const forms = document.querySelectorAll('.form-box');
  forms.forEach(form => form.classList.remove('active'));



  // Show the requested form
  const targetForm = document.getElementById(formId);

  if (targetForm) {

    targetForm.classList.add('active');

  }

};

  // Kung i-submit ang form (login attempt)

  loginForm.addEventListener('submit', e => {

    e.preventDefault(); // ayaw i-refresh ang page

    const email = document.getElementById('email').value.trim(); // kuhaon ang email

    const password = document.getElementById('password').value.trim(); // kuhaon ang password

   

    // Kung naay sulod ang email ug password

    if (email && password) {

      localStorage.setItem('loggedIn', 'true'); // butangi ug flag nga naka-login na siya



      // Enable balik ang mga nav links para makagamit na

      navLinks.forEach(link => {

        link.removeAttribute('aria-disabled'); // tangtanga ang disabled attribute

        link.classList.remove('disabled-link'); // tangtanga ang disabled style

      });



      window.location.href = 'home.html'; // i-redirect sa home page

    } else {

      alert('Please enter valid credentials.'); // kung kulang ang input, ipakita alert

    }

  });

}

// Kuhaon tanan logout links sa page (id ug class)

const logoutElements = document.querySelectorAll('#logout-link, .logout-link');



// Kung naa mga logout links

if (logoutElements.length) {



  // Kung dili naka-login, balik sa index (login page)

  if (localStorage.getItem('loggedIn') !== 'true') {

    window.location.href = 'index.html';

  }



  // Kung i-click ang logout link

  logoutElements.forEach(el => {

    el.addEventListener('click', e => {

      e.preventDefault(); // ayaw i-redirect dayon

      localStorage.removeItem('loggedIn'); // tangtanga ang login flag sa localStorage

      alert('You have been logged out.'); // ipahibaw nga naka-logout na

      window.location.href = 'index.html'; // balik sa main page

    });

  });

}



// Kung mu-click sa "Book Now" button

document.querySelectorAll('.book-now-btn').forEach(btn => {

  btn.addEventListener('click', () => {

    const popup = document.getElementById('popup'); // kuhaon ang popup element

    if (popup) popup.style.display = 'flex'; // ipakita ang popup kung naa

  });

});



// Para sa close button sa popup

const closePopupBtn = document.getElementById('closePopup');



// Kung naa ang close but

if (closePopupBtn) {

  closePopupBtn.addEventListener('click', () => { // kung mu-click sa close

    const popup = document.getElementById('popup'); // kuhaon balik ang popup

    if (popup) popup.style.display = 'none'; // tagoa ang popup

  });

}