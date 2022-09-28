<?php

namespace Database\Seeders;

use Carbon\Carbon;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    // Blog
        $blogposts= [ 
            [
                'title' => 'Start Smart - Online-Programmiervorkurs für den Start in die Wirtschaftsinformatik',
                'teaser' => 'In diesem Jahr wird den Studierenden der Wirtschaftsinformatik erstmalig mit der Immatrikulation ein Programmiervorkurs angeboten.',
                'bodytext' => 'Mit Einschreibung für ein Studium der Wirtschaftsinformatik erhalten die Studierenden einen Gutschein für den Programmiervorkurs „Quick Start - Programmieren lernen in C#“. Dieser soll den Einstieg in die Welt der Programmierung vereinfachen. Dabei handelt es sich um einen Online-Selbstlernkurs, der über die Plattform Udemy angeboten wird.

                Der Vorteil des Online-Selbstlernkurses: Studierende können in ihrem eigenen Tempo lernen und beginnen das Studium der Wirtschaftsinformatik gut vorbereitet im September. Grundlegende Elemente der Programmierung werden im Rahmen dieses Selbstlernkurses adressiert: Schleifen, bedingte Anweisungen und Variablen. Ebenso werden bereits Grundlagen der objektorientierten Programmierung vermittelt. „Unsere Absolvent*Innen arbeiten später in vielfältigen Bereichen wie der Softwareentwicklung, dem IT-Consulting, im Bereich der Datenanalyse oder im Online-Marketing - Programmierkenntnisse bilden dabei eine wichtige Grundlage“, so Prof. Dr. Sönke Cordts.
                
                Im Rahmen des Vorkurses lernen die Studierenden Sönke Cordts zwar nur virtuell kennen - dies wird allerdings nicht so bleiben: Um einen nahtlosen Übergang in das Studium zu ermöglichen, wird Sönke Cordts im ersten Semester auch die grundlegende Lehrveranstaltung zur Programmierung anbieten. Mit dem Online-Vorkurs ist ein erster Schritt bereits vor Beginn des Studiums gemacht. ',
                'author' => 'Hochschule Flensburg',
                'published_date' => Carbon::parse('2022-06-30'),
            ],
            [
                'title' => 'Lorem ipsum',
                'teaser' => 'Lorem ipsum dolor est',
                'bodytext' => 'Lorem ipsum dolor est Lorem ipsum dolor est Lorem ipsum dolor est Lorem ipsum dolor est Lorem ipsum dolor est',
                'author' => 'John Doe',
                'published_date' => Carbon::parse('2024-12-12'),
            ],
            [
                'title' => 'Lorem ipsum',
                'teaser' => 'Lorem ipsum dolor est',
                'bodytext' => 'Lorem ipsum dolor est Lorem ipsum dolor est Lorem ipsum dolor est Lorem ipsum dolor est Lorem ipsum dolor est',
                'author' => 'John Doe',
                'published_date' => Carbon::parse('2025-12-12'),
            ]
        ];
        foreach ($blogposts as $blogpost)
        {
            DB::table('blogposts')->insert($blogpost);
        };

    // Aktuelles
        $notifications=[
            [
                'title' => 'Rasmus Brandt für seine hervoragende Lehre ausgezeichnet',
                'bodytext' => 'Claus Brandt, Geschäftsführer des Deutschen Maritimen Zentrums, hat heute im Rahmen des renommierten Bremer Schifffahrtskongresses die Preise im Wettbewerb „Hervorragende akademische maritime Lehre“ vergeben. Der Preis ist ein Beitrag zur Förderung der akademischen maritimen Lehre. Mit ihm möchte das Deutsche Maritime Zentrum die Sichtbarkeit der maritimen Branche erhöhen und Lehrkräfte honorieren.

                „Dabei kommt es entscheidend auf das Engagement der Lehrenden an und davon gibt es eine ganze Menge, wie die 52 Nominierungen für 19 verschiedene Lehrpersonen aus zehn akademischen Einrichtungen zeigen“, so Claus Brandt bei der feierlichen Preisübergabe im Audimax der Hochschule Bremen am Standort Flughafendamm 40.
                Die Preisträger*innen erhalten eine Urkunde und ein Preisgeld, das für ein akademisches Herzensprojekt einzusetzen ist (1. Preis: 2.500€, 2. Preis: 1.000€, 3. Preis: 500€).
                In Vertretung für ihre Ministerin (Bettina Martin) schickte Frau Susanne Bowen, Staatssekretärin im Ministerium für Wissenschaft, Kultur, Bundes- und Europaangelegenheiten des Landes Mecklenburg-Vorpommern eine Grußbotschaft, in der sie dem Deutschen Maritimen Zentrum für die Auslobung des Preises dankte und auf die Relevanz der akademischen maritimen Lehre für die Wirtschaft hinwies. Sie sagte: „Die maritime Wirtschaft in Deutschland steht angesichts des demografischen Wandels und des internationalen Wettbewerbs vor großen Herausforderungen für die Ausbildung qualifizierter Fachkräfte. Die Lehre ist daher ein elementarer Faktor auch für den maritimen Bereich und um Innovation und Wettbewerbsfähigkeit sowie Wachstum und Beschäftigung zu sichern.“
                
                Im Anschluss hielten Mitglieder der Jury (Ständige Arbeitsgemeinschaft der Küstenländer für das Seefahrtbildungswesen) - Herr Kristian Josteit (Freie Hansestadt Bremen), Herr Ulf Knüppel (Mecklenburg-Vorpommern), Frau Dr. Sigrid Meyer (Freie und Hansestadt Hamburg) und Herr Christof Schiene (Niedersachsen) - ihre Laudationes auf die Preisträgerin und die Preisträger.
                Den 2. Preis erhält Dipl.-Ing. (FH) Rasmus Brandt, Hochschule Flensburg, Fachbereich Maschinenbau, Verfahrenstechnik und Maritime Technologien, Schiffstechnik. Brandt ist lange zur See gefahren und hat in der Zeit häufig mit Auszubildenden zu tun gehabt.
                
                Er sagt: „Ich habe mich für die Lehre entschieden, weil ich an Bord gemerkt habe, dass es mir viel Freude macht, anderen etwas beizubringen. Ich sehe die Studierenden als Kollegen der Zukunft. Das Besondere an dem Beruf des Kapitäns oder leitenden Ingenieurs ist es, ein komplexes Schiff und das Gebilde aus Technik und Besatzung im Griff zu behalten und zu steuern. Die Ausbildung an einem der modernsten Schiffssimulatoren Europas ist eine exzellente Basis für die berufliche Zukunft.“
                
                Seine Studentinnen und Studenten sagen über ihn:
                „Herr Brandt ist ein wirklicher Gewinn für den Studiengang – viele wünschen sich eine Professur für ihn. Er hat zuvor lange Jahre selbst in vielen verschiedenen und interessanten Bereichen der Schifffahrt gearbeitet und an der HS Flensburg studiert, wie wir. Dadurch begegnet er den Studierenden auf Augenhöhe und vermittelt schwerpunktmäßig nur für die Praxis relevantes Wissen, was einem im späteren Berufsleben auch an Bord weiterhilft. Seine Klausuren sind absolut fair, er ist primär am Erfolg der Studierenden interessiert und nimmt – trotz vollem Terminkalender – teils selbst an Laborveranstaltungen teil.“
                
                Die Hochschule Flensburg wurde 1886 als Königlich Preußische Seedampf-Maschinisten-Schule gegründet. 2011 wurde in Kooperation mit der Freien und Hansestadt Hamburg das Maritime Zentrum auf dem Flensburger Campus eröffnet, das heute zu den modernsten Schiffsbrücken- und Schiffsmaschinen-Simulationszentren Nordeuropas zählt.
                
                Dadurch begegnet er den Studierenden auf Augenhöhe und vermittelt schwerpunktmäßig nur für die Praxis relevantes Wissen, was einem im späteren Berufsleben auch an Bord weiterhilft.
                
                Studierende über Rasmus Brandt

                Die weiteren Preisträger
                Der 1. Preis geht an Prof. Dr. Ilknur Colmorn von der Hochschule Bremen, Fakultät Natur und Technik. Sie ist Professorin für Maritime Navigation und Digitalisierung und Studiengangsleiterin Ship Management - Nautical Sciences. Nach dem Studium ist sie als Erste Offizierin zur See gefahren. Für sie war die Entscheidung für die Nautik die beste Entscheidung ihres Lebens.
                
                Sie sagt: „Schifffahrt ist, was die Weltwirtschaft im Innersten zusammenhält. Dafür benötigen wir jetzt und in Zukunft gut ausgebildete Nautiker und Nautikerinnen. Unser Studiengang ist der Einzige, der auf Englisch stattfindet. Er ist richtig international, man kann das Mindset vermitteln, dass die Studierenden Zusammenhänge verstehen und in Leadership umsetzen können. Wichtig ist, offen zu sein für alle Weltbürger, denn nur als Team werden wir erfolgreich sein. Ich habe richtig Lust, jeden Morgen, ob es ein Meeting, Unterricht oder eine Simulator-Session ist. Das macht mir immer Spaß, der Austausch mit den jungen Leuten war immer mein Wunsch und Traum.“
                
                Ihre Studierenden sagen über Ilknur Colmorn:
                „Professor Colmorn (ist es) trotz des von Männern dominierten Fachgebiets gelungen, sich dank ihrer großen Fähigkeiten, ihres Willens und ihrer Professionalität als großartige Lehrkraft und Programmdirektorin zu profilieren. Sie ist neben den verschiedenen akademischen Projekten auch an der Betreuung der Abschlussarbeiten der Studenten beteiligt und berät diese jederzeit. Sie engagiert sich sehr für die Studierenden, steht für alle Fragen zur Verfügung und ist immer bereit, zu helfen. Als Student und künftiger Offizier sehe ich in ihr ein großartiges Beispiel für Engagement und Professionalität in dieser herausfordernden Laufbahn. Sie ist mir auf meinem Weg eine große Motivation geworden.“
                
                Den 3. Preis erhält Daniel-André Dücker, Wissenschaftlicher Mitarbeiter am Institut für Mechanik und Meerestechnik an der Technischen Universität Hamburg (TU Hamburg). Der Wissenschaftler lehrt und forscht im Bereich der mobilen Unterwasserrobotik.
                
                „Ich möchte Nachwuchswissenschaftler*innen für den maritimen Sektor begeistern. Wir fliegen zum Mond und zu anderen Planeten, aber das Leben unter Wasser, viele 1.000 Meter unter der Erde, ist weitgehend unerforscht. Das bietet die Möglichkeit für viele spannende Experimente. Anstelle einer Vorlesung bieten wir unseren Studierenden genau deshalb ein interaktives Remote-Lab an. Dort entwickeln und programmieren die Studierenden Unterwasserroboter, mit denen sie anschließend reale Herausforderungen praktisch erproben, wie zum Beispiel die Überwachung der Umweltverschmutzung in Häfen. Ich freue mich sehr, dass dieses lösungsorientierte Forschen und Arbeiten so gut bei unseren Studierenden ankommt. Die Auszeichnung des Deutschen Maritimen Zentrums ist eine tolle Motivation auch weiterhin innovative Formate in die Lehre zu integrieren“, sagt der Meerestechnik-Experte.
                
                Seine Studentinnen und Studenten sagen über ihn: „Daniel-André Dücker und sein Team bieten einen spannenden und abwechslungsreichen Kurs mit aktuellen Themen und direktem Praxisbezug. Sie schaffen es, ihre Begeisterung für das Thema der Unterwasserrobotik auf die Studierenden zu übertragen. Abwechslungsreich waren vor allem die facettenreichen und spannenden Aufgabenstellungen mit Experimenten zu Themen wie Unterwasserlokalisierung, für die eigene Lösungsansätze gefunden und ausprobiert werden mussten. Wir hatten die Möglichkeit, für das Abschlussprojekt ein völlig freies Wunschthema auszuwählen und dieses in Experiment und Simulation in Gruppen umzusetzen. Der Ideenaustausch mit anderen Gruppen wurde unterstützt und war ausdrücklich gewünscht.“
                
                Die Nominierungen kamen aus den Bundesländern Mecklenburg-Vorpommern, Freie Hansestadt Bremen, Freie und Hansestadt Hamburg, Niedersachsen, Schleswig-Holstein und Nordrhein-Westfalen. Die drei Preisträger*innen wurden von der Jury auf Basis einer Matrix und der persönlichen Bewertungen der Studierenden ausgewählt. Die Jury setzte sich zusammen aus Vertreter*innen der Ständigen Arbeitsgemeinschaft der Küstenländer für das Seefahrtbildungswesen (StAK) und Claus Brandt vom Deutschen Maritimen Zentrum.',
                'published_date' => Carbon::parse('2022-09-28'),
            ],
            [
                'title' => 'Mit recyceltem Carbon zur eigenen Firma – Hochschulprojekt unterstützt Gründer*innen',
                'bodytext' => 'Wenn Philipp Huber über recyceltes Carbon spricht, ist er in seiner Begeisterung kaum zu bremsen. „Da steckt so viel Potenzial drin“, sagt der Student der Hochschule Flensburg. Etwa Rohre. Rohre gefertigt aus recyceltem Carbon zum Einsatz als Großbaum, Mast oder Spinnakerbaum auf Segelschiffen. Mithilfe der Gründungsunterstützung rund um das Projekt TeStUp macht er aus seiner Idee ein Geschäftsmodell.

                Recyceltes Carbon wird – vereinfacht gesagt – zu einem Garn verarbeitet, dass die nahezu gleiche Festigkeit aufweist wie das ursprüngliche Material. Es spart aber einen erheblichen Teil an CO2-Emsssionen, die bei der energieintensiven Produktion entstehen. Neben dem Nachhaltigkeitsaspekt ist es die Frage, wie man das Carbon-Garn verarbeiten kann, die Philipp Huber interessiert. Und da kommt der passionierte Segler Huber der Gedanke: Warum keine Rohre für Segelboote fertigen. Mit dieser Idee ging der Schiffstechnik-Student zur Venture Werft. Und schon ist er im Gründungskreislauf, zu dem auch das Projekt TestUp gehört.
                
                Mit der Idee in den Gründungskreislauf
                Das „StartUp-Village für technologische Produkte an der Hochschule Flensburg (TeStUp)“, das seit zwei Jahren an der Hochschule Flensburg etabliert ist, rückt zwar die technologische Produktentwicklung in den Fokus der studentischen Gründungsaktivitäten, verbindet aber gleichzeitig auf interdisziplinäre Weise sämtliche Angebote rund um die StartUp-Community auf dem Campus. Und so kommt auch Philipp Huber Stück für Stück und mit fundierter Hilfe seinem Ziel näher: die Firma  „fenix composites“ zu gründen, die recyceltes Carbon in neuen Formen und für innovative Anwendungsgebiete entwickelt und vermarktet.
                
                Davon berichtet Huber also den Expert*innen der Venture Werft, die Gründungswillige unterstützen und beraten. Ihre Empfehlung: Huber solle einen Prototyp entwickeln und schicken ihn zum „TechShop“. Hier wird seine Idee aus Sicht der Fertigungsseite auf Herz und Nieren geprüft. Denn das Labor bietet eine Vielzahl an Fertigungsmaschinen, die zur Produktion von Prototypen aus verschiedenen Materialien genutzt werden können. In regelmäßigen Treffen geht es darum, wo man Carbon-Garn beschaffen kann. Ob man die Rohre selbst produzieren kann? Oder welche Firma die Rohre wickeln kann. „Wir haben uns entschieden, Material zuzukaufen und vor Ort die Endmontage durchzuführen“, berichtet Huber, der mit jedem Treffen seinen Horizont erweitert und neue Aspekte in den Blick nehmen muss. Auch die Finanzen.
                
                Finanzielle Hilfe
                „Gerade als Student*in hat man nicht mal eben ein paar tausend Euro übrig, um einen Prototyp zu fertigen“, sagt Gunnar Plöhn, Projektleiter bei TeStUp. Also muss Philipp Huber Marktanalysen betreiben, Vermarktungsstrategien ausarbeiten und Geschäftsmodelle erstellen – um von Kickstart gefördert zu werden. Der Ingenieur lernt die BWL-Komponenten des Gründungsprozesses kennen. „Das war hart“, lacht er. Aber es hat sich gelohnt. Die Jury von Kickstart, ebenfalls Bestandteil des TeStUp-Projekts, fördert Hubers Idee – und er hält seinen Prototypen in der Hand.
                
                Die Mitarbeitenden der TeStUp-Labore tauschen sich regelmäßig über die laufenden Gründungsvorhaben aus und können so den Gründenden immer neue Tipps geben. Zum Beispiel dem UsabilityLab einen Besuch abzustatten, um das Produkt auf Nutzer*innenfreundlichkeit zu testen. Oder sich im DesignLab Anregungen für das Produktdesign oder die Marken-Optik zu holen. Auch Philipp Huber hatte hier viel Spaß. „Es war interessant, sich mit der Wirkung verschiedener Schrifttypen und Farben auseinanderzusetzen.“  Aber schließlich ist er mit seinem Logo und den Produktfotografien mehr als zufrieden.
                
                Event „Its Time to TeStUp“
                Auch wenn Philipp Huber den Kreislauf der Gründungsunterstützungen nahezu idealtypisch durchlaufen hat, sagt Gunnar Plöhn: „Das Angebot muss individuell genutzt werden.“ Gleichzeitig stellt der Projektleiter klar: „Wir sind keine Full-Service-Agentur, sondern bieten Hilfe zur Selbsthilfe.“ 
                
                Philipp Huber schreibt nun seine letzten Klausuren, hat dann den Bachelorabschluss in der Tasche, will im Master Systemtechnik weiterstudieren. Nebenbei hält er Vorträge über seine Gründungsgeschichte, knüpft Kontakte zu Firmen, Instituten und Gleichgesinnten.
                
                Wer mehr über Philipp Hubers Projekt „fenix composites“ und über TeStUp erfahren möchte, ist herzlich eingeladen am Event „Its Time to TeStUp“ am 6. Oktober 2022 ab 15:00 teilzunehmen: https://eveeno.com/TeStUp
                
                Zur Info:
                TeStUp wird im Rahmen des Förderprogramms „Forschung an Fachhochschulen“, Fördermaßnahme „StartUpLab@FH, durch das Bundesministerium für Bildung und Forschung gefördert.',
                'published_date' => Carbon::parse('2024-09-27'),
            ],
            [
                'title' => 'Viel Prominenz beim „Rundgang“ an der Hochschule Flensburg- offizielle Eröffnung von "Flensburg digitalisiert"',
                'bodytext' => 'Der Minister zeigte sich sehr beeindruckt von den Jahresarbeiten der Studierenden und versprach sehr bald wiederzukommen. „Denn die ausgestellten und präsentierten Jahresarbeiten der Studierenden machen Lust auf mehr“, so der Minister. Von der Filmproduktion bis hin zu digitalen Projekten mit VR- Brillen konnten die Besucher einen vielfältigen Einblick in die Bereiche Audio, Animation, Design, App-Entwicklung, Games, Usability, Virtual Reality, Filme und vielem mehr erleben. Davon konnten sich neben dem Wirtschaftsminister auch Flensburgs Oberbürgermeisterin Simone Lange, Stadtpräsident Hannes Fuhrig, die Hochschulräte Dr. Gabriele Kötschau und Hermann Dethleffsen sowie die CDU- Landtagsabgeordnete Uta Wentzel oder auch Dr. Hauke Berndt, der 1. Vorsitzende des Clustermanagements Digitale Wirtschaft Schleswig-Holstein, selbst überzeugen.

                Der Rundgang ist aus dem Terminkalender der Hochschule Flensburg nicht mehr wegzudenken. Wenn die Studierenden der Studiengänge Angewandte Informatik, Medieninformatik, Internationale Fachkommunikation sowie Design, Film und Marketing ihre Arbeiten präsentieren, strömen nicht nur die Hochschulangehörigen aller Fachbereiche und Verwaltungsabteilungen ins A-Gebäude. Auch interessierte Bürger und Bürgerinnen und vor allem Schulklassen waren eingeladen. Mehr als 200 Schülerinnen und Schüler aus Flensburg und Husum sind der Einladung heute gefolgt.
                
                Der Rundgang ist in diesem Jahr eingebettet in einen größeren Rahmen. Zum ersten Mal veranstaltet das Netzwerk Flensburg digitalisiert“ eine viertägige Veranstaltungsreihe zum Thema Digitalisierung. Ziel ist es, den Studierenden, Lehrenden, Schüler*innen und Unternehmer*innen sowie allen an Digitalisierung Interessierten eine Kommunikationsplattform zu bieten, so die Veranstalter. Den Auftakt bildete gestern Abend in der Phänomenta eine Podiumsdiskussion zum Thema Nachwuchsförderung in der IT-Branche. „Die Hochschule Flensburg ist Impulsgeberin für die Region auch im Bereich der Digitalisierung. Daher sind wir stolz auf ein neues Format, das wir gemeinsam mit vielen Partner-Organisationen unserer Region entwickelt haben: „Flensburg digitalisiert“ ist ein Versprechen, die Kompetenzen unserer Hochschule in der Region zur vollen Wirkung kommen zu lassen, so Hochschulpräsident Dr. Christoph Jansen.',
                'published_date' => Carbon::parse('2025-09-22'),
            ],
        ];
        foreach ($notifications as $notification)
        {
            DB::table('notifications')->insert($notification);
        }
    
    // Twitter
        $settings=[[
            'twitter_url' => 'https://twitter.com/HochschuleFL?s=20&t=a68GRlwbY_qdcL-D4EQyPA'
        ]            
        ];
        foreach ($settings as $setting)
        {
            DB::table('settings')->insert($setting);
        }

       
    
    // Vorlesungsplan

        $lectures=[
            [
                'start_time' => Carbon::parse('2023-12-12 08:00:00'),
                'end_time' => Carbon::parse('2023-12-13 10:00:00'),
            ],
            [
                'start_time' => Carbon::parse('2023-12-12 10:00:00'),
                'end_time' => Carbon::parse('2023-12-13 12:00:00'),
            ],
            [
                'start_time' => Carbon::parse('2023-12-12 12:00:00'),
                'end_time' => Carbon::parse('2023-12-13 14:00:00'),
            ],
            [
                'start_time' => Carbon::parse('2023-12-12 14:00:00'),
                'end_time' => Carbon::parse('2023-12-13 16:00:00'),
            ],
            [
                'start_time' => Carbon::parse('2023-12-12 16:00:00'),
                'end_time' => Carbon::parse('2023-12-13 18:00:00'),
            ],
        ];

        foreach ($lectures as $lecture)
        {
            DB::table('lectures')->insert($lecture);
        }

    // Rooms 
        $rooms=[
            [
                'title' => 'C229',
            ],
            [
                'title' => 'C012',
            ],
            [
                'title' => 'C213',
            ],
            [
                'title' => 'C212',
            ],
            [
                'title' => 'C229',
            ],
            [
                'title' => 'C227',
            ],
            [
                'title' => 'C127',
            ],
            [
                'title' => 'C229',
            ],
            [
                'title' => 'C028',
            ],
            [
                'title' => 'C212',
            ],
            [
                'title' => 'C229',
            ],
            [
                'title' => 'C227',
            ],
            [
                'title' => 'C012',
            ],
            [
                'title' => 'C229',
            ],
            [
                'title' => '-',
            ],

        ];
        
        foreach ($rooms as $room)
        {
            DB::table('rooms')->insert($room);
        }
    

        $roomRelationships = [
            [ //08-10
                'lecture_id' => 1,
                'room_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 1,
                'room_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 1,
                'room_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [ //10-12
                'lecture_id' => 2,
                'room_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 2,
                'room_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 2,
                'room_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [ //12-14
                'lecture_id' => 3,
                'room_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 3,
                'room_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 3,
                'room_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [ //14-16
                'lecture_id' => 4,
                'room_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 4,
                'room_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 4,
                'room_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [ //16-18
                'lecture_id' => 5,
                'room_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 5,
                'room_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 5,
                'room_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($roomRelationships as $roomRelationship) {
            DB::table('lecture_room')->insert($roomRelationship);
        }

    // Speakers
        $speakers=[
            [
                'speaker' => 'Cordts',
            ],
            [
                'speaker' => 'Petersen',
            ],
            [
                'speaker' => 'Schmidt',
            ],
            [
                'speaker' => 'Rusnjak',
            ],
            [
                'speaker' => 'Gerken',
            ],
            [
                'speaker' => 'Lübben',
            ],
            [
                'speaker' => 'Heybrock',
            ],
            [
                'speaker' => 'Gerken',
            ],
            [
                'speaker' => 'Deseniss',
            ],
            [
                'speaker' => 'Neumann',
            ],
            [
                'speaker' => 'Gerken',
            ],
            [
                'speaker' => 'Kurth',
            ],
            [
                'speaker' => 'Petersen',
            ],
            [
                'speaker' => 'Gerken',
            ],
            [
                'speaker' => '-',
            ],

        ];
        
        foreach ($speakers as $speaker)
        {
            DB::table('speakers')->insert($speaker);
        }
    

        $speakerRelationships = [
            [ //08-10
                'lecture_id' => 1,
                'speaker_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 1,
                'speaker_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 1,
                'speaker_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [ //10-12
                'lecture_id' => 2,
                'speaker_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 2,
                'speaker_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 2,
                'speaker_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [ //12-14
                'lecture_id' => 3,
                'speaker_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 3,
                'speaker_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 3,
                'speaker_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [ //14-16
                'lecture_id' => 4,
                'speaker_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 4,
                'speaker_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 4,
                'speaker_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [ //16-18
                'lecture_id' => 5,
                'speaker_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 5,
                'speaker_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'lecture_id' => 5,
                'speaker_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($speakerRelationships as $speakerRelationship) {
            DB::table('lecture_speaker')->insert($speakerRelationship);
        }

    // LectureName
        $lecture_names=[
            [
                'lecture_name' => 'Programming User Interfaces',
            ],
            [
                'lecture_name' => 'Web Engineering',
            ],
            [
                'lecture_name' => 'ERP-Systeme',
            ],
            [
                'lecture_name' => 'Digitale Wirtschaft',
            ],
            [
                'lecture_name' => 'Data Science',
            ],
            [
                'lecture_name' => 'Netzwerke',
            ],
            [
                'lecture_name' => 'IT-Recht',
            ],
            [
                'lecture_name' => 'Data Science',
            ],
            [
                'lecture_name' => 'Marketing',
            ],
            [
                'lecture_name' => 'Grundlagen der Statistik',
            ],
            [
                'lecture_name' => 'Data Science',
            ],
            [
                'lecture_name' => 'Volkswirtschaftslehre',
            ],
            [
                'lecture_name' => 'Research Methods',
            ],
            [
                'lecture_name' => 'Data Science',
            ],
            [
                'lecture_name' => '-',
            ],

            ];
            
            foreach ($lecture_names as $lecture_name)
            {
                DB::table('lecture_names')->insert($lecture_name);
            }
        

            $lecture_nameRelationships = [
                [ //08-10
                    'lecture_id' => 1,
                    'name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 1,
                    'name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 1,
                    'name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [ //10-12
                    'lecture_id' => 2,
                    'name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 2,
                    'name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 2,
                    'name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [ //12-14
                    'lecture_id' => 3,
                    'name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 3,
                    'name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 3,
                    'name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [ //14-16
                    'lecture_id' => 4,
                    'name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 4,
                    'name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 4,
                    'name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [ //16-18
                    'lecture_id' => 5,
                    'name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 5,
                    'name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 5,
                    'name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ];
            foreach ($lecture_nameRelationships as $lecture_nameRelationship) {
                DB::table('lecture_name')->insert($lecture_nameRelationship);
            }

    // Events     
        $events=[
        [
            'title' => 'CampusLab im IDEENREICH ',
            'event_date' => Carbon::parse('2022-10-5'),
        ],
        [
            'title' => 'OpenLab im Usability Labor',
            'event_date' => Carbon::parse('2022-10-5'),
        ],
        [
            'title' => 'OpenLab im IDEENREICH ',
            'event_date' => Carbon::parse('2022-10-5'),
        ],
        [
            'title' => 'NonTechWednesday: Micro-Barcamp',
            'event_date' => Carbon::parse('2022-10-5'),
        ],
        [
            'title' => ' Its Time to TeStUp',
            'event_date' => Carbon::parse('2022-10-6'),
        ],
        [
            'title' => 'Excel-Kurs (Termin 1/10)',
            'event_date' => Carbon::parse('2022-10-7'),
        ],
        [
            'title' => 'ReparaturCafé im IDEENREICH',
            'event_date' => Carbon::parse('2022-10-8'),
        ],
        ];

            foreach ($events as $event)
            {
                DB::table('events')->insert($event);
            }
            }
}
