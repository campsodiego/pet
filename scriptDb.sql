CREATE TABLE usuario (
  idusuario INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR(200)    ,
  email VARCHAR(200)    ,
  senha VARCHAR(25)      ,
PRIMARY KEY(idusuario));

CREATE TABLE anuncios (
  idanuncios INTEGER NOT NULL AUTO_INCREMENT,
  usuario_idusuario INTEGER   NOT NULL ,
  tituloAnuncio VARCHAR(100)    ,
  qtdAnuncio INTEGER    ,
  vlrAnuncio DOUBLE    ,
  descricaoAnuncio VARCHAR(300)    ,
  imagem VARCHAR(100)      ,
PRIMARY KEY(idanuncios)  ,
  FOREIGN KEY(usuario_idusuario)
    REFERENCES usuario(idusuario));

CREATE INDEX anuncios_FKIndex1 ON anuncios (usuario_idusuario);

CREATE INDEX IFK_PUBLICA ON anuncios (usuario_idusuario);

CREATE TABLE avaliacao (
  idavaliacao INTEGER NOT NULL AUTO_INCREMENT,
  anuncios_idanuncios INTEGER   NOT NULL ,
  usuario_idusuario INTEGER   NOT NULL ,
  dtaAvaliacao DATETIME    ,
  vlrAvaliacao INTEGER    ,
  comentarioAva VARCHAR(300)      ,
PRIMARY KEY(idavaliacao)    ,
  FOREIGN KEY(usuario_idusuario)
    REFERENCES usuario(idusuario),
  FOREIGN KEY(anuncios_idanuncios)
    REFERENCES anuncios(idanuncios));

CREATE INDEX avaliacao_FKIndex1 ON avaliacao (usuario_idusuario);
CREATE INDEX avaliacao_FKIndex2 ON avaliacao (anuncios_idanuncios);

CREATE INDEX IFK_REALIZA ON avaliacao (usuario_idusuario);
CREATE INDEX IFK_POSSUI ON avaliacao (anuncios_idanuncios);



