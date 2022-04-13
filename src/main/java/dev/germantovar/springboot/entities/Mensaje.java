package dev.germantovar.springboot.entities;

import lombok.EqualsAndHashCode;
import lombok.Getter;
import lombok.Setter;
import lombok.ToString;

import javax.persistence.*;

@Entity
@Table(name = "mensajes")
@Getter @Setter
@ToString
@EqualsAndHashCode
public class Mensaje{
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String palabra1;
    private String palabra2;
    private String palabra3;
    private String palabra4;
    private String palabra5;

}
