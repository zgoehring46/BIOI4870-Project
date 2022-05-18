drop table if exists insulin_proteins;
drop table if exists insulin_seq;
drop table if exists insulin_compare;

create table insulin_compare(
	accver VARCHAR(20),
	score INT,
	e_val VARCHAR(10),
	per_ID FLOAT,
	PRIMARY KEY (accver)
);

create table insulin_seq(
	tseq_accver VARCHAR(20),
	tseq_taxid INT,
	tseq_orgname VARCHAR(50),
	tseq_length INT,
	tseq_sequence VARCHAR(200),
	PRIMARY KEY (tseq_orgname),
	FOREIGN KEY (tseq_accver) REFERENCES insulin_compare (accver)
);

create table insulin_proteins(
	title VARCHAR(50),
	url VARCHAR(50),
	len VARCHAR(20),
	ids VARCHAR(100),
	entrezuid INT,
	PRIMARY KEY (entrezuid),
	FOREIGN KEY (title) REFERENCES insulin_seq (tseq_orgname)
);
