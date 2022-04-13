import { Title } from '@angular/platform-browser';

export interface Game {
    id?: number|string,
    fecha?: string,
    description?: string,
    image?: string,
    created_at?: Date
};