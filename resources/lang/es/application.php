<?php

return [

	"model" => [
		/* Ejemplo Traducción de Atributos de Algún Modelo */
		"modelname" => [
			"attributes" => [
				"ex_name"        => "Ej_Nombre",
				"ex_description" => "Ej_Descripción"
			]
		],
		"financialentity" => [
			"attributes" => [
				"bank_code"  => "Código Banco",
				"bank"       => "Banco"
			]
		],
		"domiciliation" => [
			"attributes" => [
				"insured_id"           => "Asegurado",
				"financial_entitie_id" => "Entidad Financiera",
				"nro_cta" 	       => "Nro. de Cuenta",
				"nro_tdc"              => "Nro. Tarjeta de Crédito"
			]
		],
		"insurance" => [
			"attributes" => [
				"tipoid"        => "Tip. Identificación",
				"numid"         => "Nro. Identificación",
				"social_reason" => "Razón Social",
				"main_address"  => "Dirección Principal",
				"phones"        => "Teléfono",
				"ind_insurance" => "Aseguradora?",
				"ind_funding"   => "Financiadora?"
			]
		],
		"area" => [
			"attributes" => [
				"cod_area" => "Código Área",
				"area" 	   => "Área"
			]
		],
		"branch" => [
			"attributes" => [
				"area_id"     => "Área",
				"branch_code" => "Código Ramo",
				"branch"      => "Ramo"
			]
		],
		"coverage" => [
			"attributes" => [
				"branche_id"    => "Ramo",
				"coverage_code" => "Código Cobertura",
				"coverage" 	=> "Cobertura",
				"bonus" 	=> "Prima",
				"sum_insured" 	=> "Suma Asegurada",
				"initial" 	=> "Inicial",
				"amount_dues" 	=> "Cuotas",
				"rate" 	        => "Tasa"
			]
		],
		"insured" => [
			"attributes" => [
				"tipoid"                   => "Tip. Identificación",
				"numid"                    => "Nro. Identificación",
				"dvid"                     => "Correlativo",
				"names"                    => "Nombres",
				"last_names"               => "Apellidos",
				"dbirth"                   => "F/Nacimiento",
				"email"                    => "Email",
				"phones"                   => "Teléfono",
				"insured_indicator_holder" => "Asegurado Titular?",
				"direction" 	           => "Dirección"
			]
		],
		"paymentmode" => [
			"attributes" => [
				"payment_form"  => "Forma de Pago",
				"num_shares" 	=> "Nro. Cuotas"
			]
		],
		"policiesissued" => [
			"attributes" => [
				"f_emission"       => "F/Emisión",
				"f_begin_validity" => "Inicio Vigencia",
				"f_end_validity"   => "Fin Vigencia",
				"insured_id" 	   => "Asegurado Titular",
				"insurance_id" 	   => "Aseguradora",
				"product_pol" 	   => "Producto",
				"numpol"           => "Nro. Póliza",
				"num_restoration"  => "Nro. Renovación",
				"certificates"     => "Certificados",
				"payment_mode_id"  => "Forma de Pago",
				"coverage_id" 	   => "Coberturas",
				"ind_offices" 	   => "Domiciliada?",
				"sts" 	           => "Estado"
			]
		],
                "certveh" => [
			"attributes" => [
				"policies_issued_id" => "Póliza",
				"color"              => "Color",
				"license_plate"      => "Placa",
				"serial_body"        => "Serial Carrocería",
				"engine_serial"      => "Serial Motor",
				"brand" 	     => "Marca",
				"model"              => "Modelo",
				"serie"              => "Año"
			]
		],
                "certhealth" => [
			"attributes" => [
				"policies_issued_id" => "Póliza",
				"deductible"         => "Deducible",
				"excess"             => "Exceso",
				"excess_deductible"  => "Deducible Exceso",
				"motherhood_ind"     => "Maternidad?",
				"waiting_period"     => "Plazo de Espera?"
			]
		],
                "certrcv" => [
			"attributes" => [
				"policies_issued_id" => "Póliza",
				"num_ctto"           => "Nro. Contrato",
				"contract"           => "Contrato"
			]
		],
                "certtechnical" => [
			"attributes" => [
				"policies_issued_id" => "Póliza",
				"machinery"          => "Maquinária",
				"model"              => "Modelo",
                                "serial_body"        => "Serial Carrocería"
			]
		],
                "receipt" => [
			"attributes" => [
				"policies_issued_id" => "Póliza",
				"numrec"             => "Nro. Recibo",
				"bonus"              => "Prima",
				"sum_insured"        => "Suma Asegurada",
				"coverage_id"        => "Cobertura",
				"accession_number"   => "Nro. Ingreso",
				"court_date"         => "F/Corte",
                                "sts"                => "Estado"
			]
		],
                "sinister" => [
			"attributes" => [
				"policies_issued_id" => "Póliza",
				"insured_id"         => "Asegurado",
				"number_sinister"    => "Nro. Siniestro",
                                "occurrence_date"    => "F/Ocurrencia",
                                "declaration_date"   => "F/Declaración",
                                "reserved_amount"    => "Monto Reservado",
                                "obs"                => "Observación",
                                "sts"                => "Estado"
			]
		],
                "order" => [
			"attributes" => [
				"policies_issued_id"   => "Póliza",
				"sinister_id"          => "Siniestro",
				"order_number"         => "Nro. Orden",
                                "reception_date_order" => "F/Recepción",
                                "delivery_date_order"  => "F/Entrega",
                                "amount"               => "Monto",
                                "obs"                  => "Observación",
                                "sts"                  => "Estado"
			]
		],
		/* Fin Ejemplo */
		"message" => [
			"basic" => [
				"succesfull" => [
					"create" => "Registro creado con exito.!",
					"update" => "Registro actualizado con exito.!",
					"delete" => "Registro se ha elimando.",
					"destroy" => "Registro destruido."
				],
				"failure" => [
					"create" => "Ha ocurrido un inconveniente, el registro no fue creado.",
					"update" => "Ha ocurrido un inconveniente, el registro no fue actualizado.",
					"delete" => "Ha ocurrido un inconveniente, el registro no fue eliminado.",
					"destroy" => "Ha ocurrido un inconveniente, el registro no fue destruido.",
					"norows" => "No hay registro."
				]
			],
			"confirm" => [
				"delete" => "Esta seguro de eliminar éste registro?"
			]
		]
	],
	"view" => [
		"actions" => [
			"new"    => "Agregar",
			"update" => "Actualizar",
			"delete" => "Eliminar",
			"action" => "Operaciones",
			"back"   => "Atrás",
			"save"   => "Guardar"
		]
	],
	'en' => 'Ingles',
	'es' => 'Español'
];
