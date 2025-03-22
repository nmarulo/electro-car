import {es} from '../content/i18n/es.ts';
import {en} from '../content/i18n/en.ts';
import {es as esService} from '../content/services/es.services.ts';
import {en as enService} from '../content/services/en.services.ts';

export const languages = {
  en: 'English',
  es: 'Español'
};

export const defaultLang = 'en';

export const ui = {
  en,
  es
} as const;

export const services = {
  en: enService,
  es: esService
} as const;
