import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Game } from '../models/Game';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class GamesService {

  

  API_URI = 'http://localhost:8080/tipificacion';

  constructor(private http: HttpClient) { }

  create(game:Game):Observable<Game> {
    return this.http.post<Game>(`${this.API_URI}`, game);
  }

  getGames() {
    return this.http.get(`${this.API_URI}`);
  }

  getGame(id: string) {
    return this.http.get(`${this.API_URI}/${id}`);
  }

  deleteGame(id: string) {
    return this.http.delete(`${this.API_URI}/${id}`);
  }

  saveGame(game: Game) {
    return this.http.post(`${this.API_URI}`, game);
  }

  updateGame(game: Game): Observable<Game> {
    return this.http.put<Game>(`${this.API_URI}`, game);
  }

}
