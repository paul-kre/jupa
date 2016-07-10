USE juliapaschos;

INSERT INTO page (urlname, nicename, position)
	VALUES ('kontakt', 'Kontakt & Konzept', 0);

INSERT INTO page (urlname, nicename, enabled, position)
	VALUES ('ansichten', 'Ansichten', FALSE, 10);


INSERT INTO page (urlname, nicename, parent, position)
	VALUES ('aussen', '<span class="small">vom</span> Aussen', 'ansichten', 0);

INSERT INTO page (urlname, nicename, parent, position)
	VALUES ('innen', '<span class="small">zum</span> Innen', 'ansichten', 10);

INSERT INTO page (urlname, nicename, parent, position)
	VALUES ('kueche', '<span class="small">zur</span> K&uuml;che', 'ansichten', 20);


INSERT INTO page (urlname, nicename, parent, position)
	VALUES ('bad', '<span class="small">ins</span> Bad', 'ansichten', 30);

INSERT INTO page (urlname, nicename, parent, position)
	VALUES ('einbauten', '<span class="small">mit</span> Einbauten', 'ansichten', 40);


INSERT INTO page (urlname, nicename, parent, position)
	VALUES ('licht', '<span class="small">durch</span> Farbe <span class="small">ins</span> Licht', 'ansichten', 50);
