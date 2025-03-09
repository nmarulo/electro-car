import {defineCollection, z} from 'astro:content';
import {glob} from 'astro/loaders';

const works = defineCollection({
  loader: glob({
    pattern: '**/*.md',
    base: 'src/content/works'
  }),
  schema: z.object({
    image: z.string()
            .url(),
    title: z.string(),
    date: z.date(),
    filter: z.string(),
    tags: z.array(z.string())
  })
});

export const collections = {works};
