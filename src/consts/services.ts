export interface Service {
  title: string;
  description: string;
  icon: string;
  services: string[];
}

export const SERVICES: Array<Service> = [
  {
    title: 'Audio Profesional',
    description: 'Instalación y configuración de sistemas de audio de alta fidelidad para una experiencia sonora excepcional.',
    icon: 'bi bi-speaker',
    services: [
      'Amplificadores',
      'Subwoofers',
      'Radios'
    ]
  },
  {
    title: 'Electrónica Automotriz',
    description: 'Diagnóstico y reparación de sistemas electrónicos con equipamiento de última generación.',
    icon: 'bi bi-cpu',
    services: [
      'Diagnóstico Computarizado',
      'Reparación de fallos eléctricos y electrónicos',
      'Sistemas de Navegación'
    ]
  },
  {
    title: 'Sistemas de Seguridad',
    description: 'Protección avanzada para tu vehículo con sistemas de seguridad inteligentes.',
    icon: 'bi bi-shield-check',
    services: [
      'Alarmas y GPS',
      'Sensores de estacionamiento',
      'Cámaras de visión trasera'
    ]
  },
  {
    title: 'Aire Acondicionado',
    description: 'Mantenimiento y reparación de sistemas de climatización para máximo confort.',
    icon: 'bi bi-snow2',
    services: [
      'Recarga de Gas',
      'Limpieza de Conductos',
      'Control de Temperatura'
    ]
  },
  {
    title: 'Trabajos personalizados',
    description: 'Instalaciones y configuraciones de audio, iluminación y sistemas de entretenimiento.',
    icon: 'bi bi-tools',
    services: []
  }
];
