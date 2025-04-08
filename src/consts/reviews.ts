export interface Review {
  name: string;
  rating: number;
  comment: string;
}

export const REVIEWS: Array<Review> = [
  {
    name: 'Carlos Rodríguez',
    rating: 5,
    comment: 'El mejor servicio de audio para coches que he encontrado. Mauricio es un profesional que conoce su trabajo a la perfección. Estoy encantado con el resultado.'
  },
  {
    name: 'Miguel Torres',
    rating: 5,
    comment: 'Excelente servicio y profesionalismo. El sistema de audio que instalaron superó mis expectativas.'
  },
  {
    name: 'Ana Martínez',
    rating: 3,
    comment: 'Reparó un problema eléctrico que otros talleres no pudieron solucionar. Rápido, eficiente y a un precio justo. Totalmente recomendable.'
  },
  {
    name: 'John Doe',
    rating: 5,
    comment: 'Excelente servicio, muy profesional y eficiente. Recomiendo 100%.'
  },
  {
    name: 'Jane Smith',
    rating: 4,
    comment: 'Buen trabajo, pero podría mejorar en ciertos aspectos.'
  },
  {
    name: 'Bob Johnson',
    rating: 3,
    comment: 'Servicio regular, no es lo mejor pero funciona.'
  }
];
