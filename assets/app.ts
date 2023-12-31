import { registerReactControllerComponents } from '@symfony/ux-react';
import './bootstrap';
import 'bootstrap';
import "./i18n";
import './styles/global.scss';
import './styles/styles.scss';
import '@fortawesome/fontawesome-free/js/all';
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

registerReactControllerComponents(require.context('./react/controllers', true, /\.[jt]sx?$/));
