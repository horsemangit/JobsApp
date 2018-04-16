$(document).on("ready",function(){   

    $('#formpage').bootstrapValidator({     
        
        fields: {

            tipodocumento : {
                validators: {
                    notEmpty: {
                        message: 'Este Campo Es Requerido!'
                    }
                }
            }, 

            num_documento: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },
                   /*stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Deberas Ingresar de 6 a 30 Caracteres'
                    },  */
                    regexp: {
                        regexp: /^[0-9]*$/,
                        message: 'Solo debes de ingresar numeros'
                    }    

                }
            },

            fechnaci: {
                validators: {
                    notEmpty: {
                        message: 'Este Campo Es Requerido!'
                    }
                }
            },

            genero: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            estadocivil: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            tipotelefono: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },                        

            numero_telefono: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },
                    stringLength: {
                        min: 7,
                        max: 10,
                        message: 'Deberas Ingresar de 7 a 10 Numeros'
                    },                   
                    regexp: {
                        regexp: /^[0-9]*$/,
                        message: 'Solo debes de ingresar numeros'
                    }  
                }
            },

            pais: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            departamento: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            ciudad: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            direccion: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            nacionalidad: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },                          
            
            cargobreve: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            descripcionbreve: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            experiencia: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            centroeducativo: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            nivelestudio: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            }, 
            
            areaestudio: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            estado: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            fechinicio: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            fechfinal: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            tipoidioma: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            nivelidioma: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            proinfo: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            conocimientos: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            situacionactual: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            ptotrabajo: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            selecarea: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            salario: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                    regexp: {
                        regexp: /^[0-9]*$/,
                        message: 'Solo debes de ingresar numeros'
                    }
                }
            },
            

            disponeviajar: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },

            disponecambioresidencia: {
                validators: {
                    notEmpty: {
                        message:  'Este Campo Es Requerido!'
                    },                   
                }
            },
        }
    });


    // CREAR PUBLICACION //
       $('#creapublicacion').bootstrapValidator({            
            fields: {   

                tipovacante: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },
                    }
                },

                departamento: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },
                    }
                },

                ciudad: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },
                    }
                },  

                salario: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },

                        regexp: {
                        regexp: /^[0-9]*$/,
                        message: 'Solo debes de ingresar numeros'
                        }  
                    }
                },  

                descripcion: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },
                    }
                },  

                fechcontratacion: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },
                    }
                },  
                                                                
                usu_correo: {
                    validators: {
                        emailAddress: {
                            message: 'Por Favor Ingrese Un Correo o Email Valido.'
                        },
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Este Campo Es Requerido!'
                        }
                    }
                },

                cantivacantes: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },

                        regexp: {
                        regexp: /^[0-9]*$/,
                        message: 'Solo debes de ingresar numeros'
                        }  
                    }
                },

                educminima: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },
                    }
                }, 

                anoexperiencia: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },

                        regexp: {
                        regexp: /^[0-9]*$/,
                        message: 'Solo debes de ingresar numeros'
                        }  
                    }
                }, 

                disponeviajar: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },
                    }
                }, 

                disponecambioresidencia: {
                    validators: {
                        notEmpty: {
                            message: 'Este Campo Es Requerido!'
                        },
                    }
                },                                                                                                              
            }
        });
    });