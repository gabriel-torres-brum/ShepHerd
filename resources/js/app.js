require("./bootstrap");
import { themeChange } from 'theme-change';
import 'tw-elements';

themeChange();

// document.getElementById('toggle-theme').addEventListener('change',
//    () => {
//       const html = document.getElementsByTagName('html')[0].classList;
//       html.toggle('dark')
//    })