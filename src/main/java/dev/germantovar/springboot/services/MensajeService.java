package dev.germantovar.springboot.services;

import dev.germantovar.springboot.entities.Mensaje;
import dev.germantovar.springboot.repository.MensajeRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class MensajeService implements IMensajeService {

    @Autowired
    private MensajeRepository repository;

    @Override
    public List<Mensaje> getAll() {
        return (List<Mensaje>) repository.findAll();
    }

    @Override
    public Mensaje getById(Long id) {
        return (Mensaje) repository.findById(id).get();
    }

    @Override
    public void remove(Long id) {
        repository.deleteById(id);
    }

    @Override
    public void save(Mensaje mensaje) {
        repository.save(mensaje);
    }

}
