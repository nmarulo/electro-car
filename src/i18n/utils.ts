import {defaultLang, services, ui} from './ui';
import type {Service} from '../content/services/service.interfaces.ts';

export function getLangFromUrl(url: URL) {
  const [, lang] = url.pathname.split('/');

  if (lang in ui) {
    return lang as keyof typeof ui;
  }

  return defaultLang;
}

export function useTranslations(lang: keyof typeof ui) {
  return function t(key: keyof typeof ui[typeof defaultLang]) {

    return ui[lang][key] || ui[defaultLang][key];
  };
}

export function getTranslations(lang: keyof typeof services): Array<Service> {
  return services[lang] || services[defaultLang];
}

export function changeLangFromUrl(url: URL, lang: string) {
  const [, , ...rest] = url.pathname.split('/');

  return `/${lang}/${rest.join('/')}`;
}
