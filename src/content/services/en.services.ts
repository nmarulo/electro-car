import type {Service} from './service.interfaces.ts';

export const en: Array<Service> = [
  {
    title: 'Professional Audio',
    description: 'Installation and configuration of high-fidelity audio systems for an exceptional sound experience.',
    icon: 'bi bi-speaker',
    services: [
      'Amplifiers',
      'Subwoofers',
      'Car Stereos'
    ],
    image_end: 'https://picsum.photos/700/450'
  },
  {
    title: 'Automotive Electronics',
    description: 'Diagnosis and repair of electronic systems with state-of-the-art equipment.',
    icon: 'bi bi-cpu',
    services: [
      'Computerized Diagnostics',
      'Electrical and Electronic Fault Repair',
      'Navigation Systems'
    ],
    image_start: 'https://picsum.photos/700/450'
  },
  {
    title: 'Security Systems',
    description: 'Advanced protection for your vehicle with intelligent security systems.',
    icon: 'bi bi-shield-check',
    services: [
      'Alarms and GPS',
      'Parking Sensors',
      'Backup Cameras'
    ],
    image_end: 'https://picsum.photos/700/450'
  },
  {
    title: 'Air Conditioning',
    description: 'Maintenance and repair of climate control systems for maximum comfort.',
    icon: 'bi bi-snow2',
    services: [
      'Gas Recharge',
      'Duct Cleaning',
      'Temperature Control'
    ],
    image_start: 'https://picsum.photos/700/450'
  },
  {
    title: 'Custom Work',
    description: 'Custom installations and configurations for audio, lighting and entertainment systems.',
    icon: 'bi bi-tools',
    services: [],
    image_end: 'https://picsum.photos/700/450'
  }
];
