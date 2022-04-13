package dev.germantovar.springboot.repository;

import dev.germantovar.springboot.entities.Mensaje;
import dev.germantovar.springboot.entities.Mensaje;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface MensajeRepository extends CrudRepository<Mensaje, Long> {
}
