package dev.germantovar.springboot.services;

import dev.germantovar.springboot.entities.Mensaje;

import java.util.List;

public interface IMensajeService {
    List<Mensaje> getAll();
    Mensaje getById(Long id);
    void remove(Long id);
    void save(Mensaje mensaje);
}
