package dev.germantovar.springboot.controllers;

import dev.germantovar.springboot.entities.Mensaje;
import dev.germantovar.springboot.entities.Mensaje;
import dev.germantovar.springboot.repository.MensajeRepository;
import dev.germantovar.springboot.services.IMensajeService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController
public class MensajeController {

    @Autowired
    private IMensajeService service;

    @Autowired
    MensajeRepository mensajeRepository;

    @GetMapping("tipificacion")
    public List<Mensaje> getAll() {
        return service.getAll();
    }

    @GetMapping("tipificacion/{id}")
    public Mensaje getById(@PathVariable String id) {
        return service.getById(Long.parseLong(id));
    }

    @DeleteMapping("tipificacion/{id}")
    public void remove(@PathVariable String id) {
        service.remove(Long.parseLong(id));
    }

    @PostMapping("tipificacion")
    public void save(@RequestBody Mensaje mensajes) {
        service.save(mensajes);
    }


    @PutMapping("/tipificacion/{id}")
    public ResponseEntity<Mensaje> updateTutorial(@PathVariable("id") long id, @RequestBody Mensaje mensajes) {

        Optional<Mensaje> mensajesData = mensajeRepository.findById(id);
        if (mensajesData.isPresent()) {
            Mensaje _mensajes = mensajesData.get();
            _mensajes.setPalabra1(mensajes.getPalabra1());
            _mensajes.setPalabra2(mensajes.getPalabra2());
            _mensajes.setPalabra3(mensajes.getPalabra3());
            _mensajes.setPalabra4(mensajes.getPalabra4());

            return new ResponseEntity<>(mensajeRepository.save(_mensajes), HttpStatus.OK);
        } else {
            return new ResponseEntity<>(HttpStatus.NOT_FOUND);
        }
    }

}
