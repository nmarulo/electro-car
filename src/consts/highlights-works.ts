export interface HighlightsWork {
  title: string;
  description: string;
  image: string;
  category: string;
}

export const HIGHLIGHTS_WORKS: Array<HighlightsWork> = [
  {
    title: 'Sistema de Audio Premium',
    description: 'Instalación completa de sistema de audio de alta fidelidad con subwoofers personalizados.',
    image: 'https://picsum.photos/600/400',
    category: 'audio'
  },
  {
    title: 'Sistema de Navegación',
    description: 'Actualización completa del sistema de navegación y entretenimiento.',
    image: 'https://picsum.photos/600/400',
    category: 'electrónica'
  },
  {
    title: 'Sistema de Seguridad',
    description: 'Instalación de cámaras y sistema de alarma con GPS tracking.',
    image: 'https://picsum.photos/600/400',
    category: 'seguridad'
  }
];
