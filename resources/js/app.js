require('./bootstrap');
import {settings: mysettings} from './bakri'
const settings = require('./bakri').settings

import Alpine from 'alpinejs';
import axios from 'axios';

window.Alpine = Alpine;

Alpine.start();