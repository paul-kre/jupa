USE juliapaschos;

INSERT INTO page (urlname)
	VALUES ('home');

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


UPDATE page
  SET description = 'JULIA PASCHOS entwickelt Ideen für Ihre Innen- und Außenräume. Ihre Wünsche und Vorstellungen fließen in den Entwurf ein.',
  keywords = 'Modernisierung, Neubau, Umbau, im Gespräch mit Julia Paschos, Architektur und Innenarchitektur bis ins Detail, Düsseldorf'
  WHERE urlname = 'kontakt' OR urlname = 'home';


UPDATE page
  SET description = 'Bauen in einer schlichte Ästhetik und mit handwerklichem Anspruch. Ihren Umbau, Modernisierung, Anbau, Dachausbau oder Neubau gestalte ich mit dem gleichen Anspruch.',
  keywords = 'Bestandsbauten modernisieren, Neubau, Umbau, Dachausbau, schlichte Ästhetik, Kosten und Nutzen im Blick, im Gespräch mit Julia Paschos, Architektur und Innenarchitektur bis ins Detail, Düsseldorf'
  WHERE urlname = 'aussen';


UPDATE page
  SET description = 'Die Raumaufteilung und Raumnutzung spiegeln die Bedürfnisse der Bewohner. Vor dem Gestalten, Planen und Bauen kristallisiere ich Ihre Bedürfnisse heraus.',
  keywords = 'Gemeinsschaftsräume, Rückzugsorte, Einrichtung flexibel gestalten, Wandschränke, Möbel richtig platzieren, Stauraum, Lichtplanung, Einfall des natürlichen Lichts, Kosten und Nutzen im Blick, im Gespräch mit Julia Paschos, Architektur und Innenarchitektur bis ins Detail, Düsseldorf'
  WHERE urlname = 'innen';


UPDATE page
  SET description = 'Bei der Gestaltung Ihrer Küche gehe ich auf Ihre Wünsche ein. Arbeitsabläufe, die Proportionen des Raumes, Lichteinfall und Raumöffnungen fließen in die Gestaltung ein.',
  keywords = 'individuell geplante Küche, handwerklich gefertigte Küche, Küchenblock, Technik, Farbe, Materialien, Lichtplanung, Stauraum, Kosten und Nutzen im Blick, im Gespräch mit Julia Paschos, Architektur und Innenarchitektur bis ins Detail, Düsseldorf'
  WHERE urlname = 'kueche';


UPDATE page
  SET description = 'Ein ausgefallenes Gästebad. Ihr Badezimmer zum Wohlfühlen. Ihre Vorlieben und Wünsche berücksichtige ich bei der Badplanung: Badewanne, Dusche und Badarmaturen, die Farbe und Haptik von Wand- und Bodenbelegen und vielen kleinen Details –inszeniert durch Licht.',
  keywords = 'Badezimmer, Gästebad, ausgefallene Details, Bodenbelege, Wandbelege, Lichtplanung, Lichtquellen, Leuchten, Stauraum, Spiegelflächen, Kosten und Nutzen im Blick, im Gespräch mit Julia Paschos, Architektur und Innenarchitektur bis ins Detail, Düsseldorf'
  WHERE urlname = 'bad';


UPDATE page
  SET description = 'Während der Planung berücksichtige ich, in welchen Räumen Sie Stauflächen und Einbauten benötigen. Genügend Platz in der Garderobe im Eingangsbereich, eingebaute Bücherregale, Platz für Sammlungen, Wandschränke die wie Wandflächen wirken.',
  keywords = 'Einbauschränke, Wandschränke, Stauraum, Ordnung, offene Bücherregal, Garderobe, inszenierte Nischen, Raumteiler, Schränke, Kosten und Nutzen im Blick, im Gespräch mit Julia Paschos, Architektur und Innenarchitektur bis ins Detail, Düsseldorf'
  WHERE urlname = 'einbauten';


UPDATE page
  SET description = 'Jeder Raum stellt unterschiedliche Anforderungen an die Lichtplanung. Mit der Farbwahl und Farbqualität werden Akzente gesetzt und bestimmte Stimmungen erzeugt. Was wünschen Sie?',
  keywords = 'Lichtakzente, Arbeitsräume beleuchten, künstliche und natürliche Licht. Wandfarbe, matt und glänzende Farbe, helle und dunkle Farben, Farbintensität, Farbe und Licht im Zusammenspiel, Kunstobjekte zur Geltung bringen, Kosten und Nutzen im Blick, im Gespräch mit Julia Paschos, Architektur und Innenarchitektur bis ins Detail, Düsseldorf'
  WHERE urlname = 'licht';