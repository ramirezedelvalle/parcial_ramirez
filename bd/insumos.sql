CREATE TABLE insumos (
	insu_cod INTEGER NOT NULL,
    insu_nom VARCHAR(100) NOT NULL,
	insu_marca VARCHAR(100) NOT NULL,
    insu_prov VARCHAR(100) NOT NULL,
	insu_cant INTEGER NOT NULL, 
    insu_prec DECIMAL(8,2) NOT NULL,
    PRIMARY KEY (insu_cod)
);
