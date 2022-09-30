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
                'title' => 'Kooperation mit team energie',
                'teaser' => 'Die Hochschule Flensburg kooperiert mit team energie: Studierende der Wirtschaftsinformatik führen mit Prof. Dr. Jan Gerken ein „Data Science-Projekt“ für den Geschäftsbereich Tankstellen durch.',
                'bodytext' => 'Mathematik, Grundlagen der Statistik, statistische Analyseverfahren - Module, die sicherlich nicht auf Anhieb Begeisterungsstürme in einem Curriculum auslösen. Der Weg lohnt sich allerdings. Der erste Jahrgang des reakkreditieren Bachelorstudiengangs Wirtschaftsinformatik (B. Sc.) hat diese Module bereits erfolgreich abgeschlossen. Aufbauend auf den Veranstaltungen folgte in diesem Semester das Modul Data Science. In einem gemeinsamen Projekt mit dem Unternehmen team energie GmbH & Co. KG hat sich gezeigt, dass sich das Durchhaltevermögen auszahlt: Studierende haben für das Unternehmen echte Verkaufsdaten von Tankstellen analysiert. Das Unternehmen ist von den Ergebnissen überzeugt. Dabei erfolgt durch die Studierenden ein unmittelbarer Transfer der zuvor gelernten Methoden in das Modul Data Science, im Rahmen dessen die Umsetzung mit Python im Vordergrund steht. „Die Studierenden haben eigenständig Methoden ausgewählt, die sie in vorherigen Modulen bereits kennengelernt haben. Dies zeigt die sehr gute und stringente Ausbildung, die durch meine Kollegin Regine Neumann und meine Kollegen Ulrich Welland und Thomas Severin zuvor geleistet wurde - und auch die hohe Leistungsbereitschaft unserer Studierenden“, so Jan Gerken, der für das Modul Data Science verantwortlich ist.  

                Der Weg kann sich lohnen: Der Beruf des Data Scientists ist lukrativ und qualifizierte Absolvent*innen sind begehrt. Auf den Weg dorthin begleitet die Hochschule Flensburg im Studiengang Wirtschaftsinformatik ihre Studierende. „Wir bieten zwar kein Data-Science-Studium, ermöglichen aber durch die weiteren Themen aus dem Bereich Software Engineering und IT-Produktmanagement eine umfassende Sicht auf die aktuellen Entwicklungen im Bereich Unternehmens-IT“, erläutert Thomas Severin. 
                
                Eine Weiterqualifizierung an der Hochschule Flensburg ist ebenso möglich. So umfasst der Schwerpunkt Wirtschaftsinformatik des Masterstudiengangs Business Management weitere Veranstaltungen, in denen die Ausbildung in diesem Bereich fortgesetzt wird. 
                
                Auch im Bachelorstudiengang ist der Weg noch nicht zu Ende: Im fünften Semester steht noch das Modul Einführung in die Künstliche Intelligenz an. „Ich bin optimistisch, dass es nach dem Sommer mit spannenden Projekten weitergehen wird“, so Jan Gerken, der dann auch die Einführung in die Künstliche Intelligenz betreuen wird.',
                'author' => 'Hochschule Flensburg',
                'published_date' => Carbon::parse('2022-06-14'),
            ],
            [
                'title' => 'Wirtschaftsinformatiker wollen Aktienhandel automatisieren',
                'teaser' => 'Drei Studierende haben in ihrer Freizeit einen Algorithmus entwickelt, der zeigt welche Investition aktuell am erfolgversprechendsten wäre.',
                'bodytext' => '„Wir könnten den Handel mit Aktien automatisieren. Probieren wir es einfach!“ Das sagten sich drei Studierende der Wirtschaftsinformatik.

                Adrian Sarwari (24) ist einer der drei Studierenden. Zusammen hat er mit Fabian-Malte Möller (24) und Dustin Werner (22) den Bachelorstudiengang Wirtschaftsinformatik an der Hochschule Flensburg belegt. Während seine Kommilitonen nach dem Abschluss nach Kiel gezogen sind, ist Adrian Sarwari in den Master Business Management mit dem Schwerpunkt Wirtschaftsinformatik gewechselt. Gemeinsam arbeiten die drei Freunde an einem spannenden Projekt. „Mit dem Beginn der Corona-Pandemie und dem Crash auf dem Aktienmarkt, haben wir die Potentiale des Wertpapierhandels erkannt“, erzählt Adrian Sarwari, „und uns überlegt, wie wir mit unserem technischen Background als Wirtschaftsinformatiker einen Mehrwert aus dem Handel ziehen können.“
                
                Also haben die drei Vollzeitstudierenden in ihrer Freizeit einen Algorithmus entwickelt, der Aktien auf Basis verschiedener Indikatoren vergleicht und einen Score ermittelt, der zeigt, welche Investition aktuell am erfolgversprechendsten wäre. Bisher haben sie das Modell anhand historischer Daten getestet, aber ihre Erfolgsquote ist hoch. „Da wir uns auf technische Indikatoren stützen, indem wir uns beispielsweise die Kurse der letzten Wochen anschauen, können wir Trends bestimmen. Indem wir Emotionen aus dem Handel nehmen, treffen wir objektivere Entscheidungen“, sagt Adrian Sarwari.
                
                Am Ende, so dass Ziel der drei Informatiker, soll der Handel automatisiert ablaufen, Kauf- und Verkaufsentscheidungen werden über die Cloud gesteuert. Um die Automatisierung und die Ermittlung optimaler Handelsstrategien im Wertpapierhandel geht es in seiner Masterthesis, die Adrian Sarwari im kommenden Semester anfängt. Ein komplexes Thema, sagt er selbst. „Aber wir haben im Studium die Grundlagen gelernt, um zu wissen wie wir mit unseren Fähigkeiten unsere Idee Wirklichkeit werden lassen.“',
                'author' => 'Hochschule Flensburg',
                'published_date' => Carbon::parse('2021-09-08'),
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
                Den 2. Preis erhält Dipl.-Ing. (FH) Rasmus Brandt, Hochschule Flensburg, Fachbereich Maschinenbau, Verfahrenstechnik und Maritime Technologien, Schiffstechnik. Brandt ist lange zur See gefahren und hat in der Zeit häufig mit Auszubildenden zu tun gehabt.',
                'published_date' => Carbon::parse('2022-09-28'),
            ],
            [
                'title' => 'Mit recyceltem Carbon zur eigenen Firma – Hochschulprojekt unterstützt Gründer*innen',
                'bodytext' => 'Wenn Philipp Huber über recyceltes Carbon spricht, ist er in seiner Begeisterung kaum zu bremsen. „Da steckt so viel Potenzial drin“, sagt der Student der Hochschule Flensburg. Etwa Rohre. Rohre gefertigt aus recyceltem Carbon zum Einsatz als Großbaum, Mast oder Spinnakerbaum auf Segelschiffen. Mithilfe der Gründungsunterstützung rund um das Projekt TeStUp macht er aus seiner Idee ein Geschäftsmodell.
                Recyceltes Carbon wird – vereinfacht gesagt – zu einem Garn verarbeitet, dass die nahezu gleiche Festigkeit aufweist wie das ursprüngliche Material. Es spart aber einen erheblichen Teil an CO2-Emsssionen, die bei der energieintensiven Produktion entstehen. Neben dem Nachhaltigkeitsaspekt ist es die Frage, wie man das Carbon-Garn verarbeiten kann, die Philipp Huber interessiert. Und da kommt der passionierte Segler Huber der Gedanke: Warum keine Rohre für Segelboote fertigen. Mit dieser Idee ging der Schiffstechnik-Student zur Venture Werft. Und schon ist er im Gründungskreislauf, zu dem auch das Projekt TestUp gehört.
                
                Mit der Idee in den Gründungskreislauf
                Das „StartUp-Village für technologische Produkte an der Hochschule Flensburg (TeStUp)“, das seit zwei Jahren an der Hochschule Flensburg etabliert ist, rückt zwar die technologische Produktentwicklung in den Fokus der studentischen Gründungsaktivitäten, verbindet aber gleichzeitig auf interdisziplinäre Weise sämtliche Angebote rund um die StartUp-Community auf dem Campus. Und so kommt auch Philipp Huber Stück für Stück und mit fundierter Hilfe seinem Ziel näher: die Firma  „fenix composites“ zu gründen, die recyceltes Carbon in neuen Formen und für innovative Anwendungsgebiete entwickelt und vermarktet.
',
                'published_date' => Carbon::parse('2022-09-27'),
            ],
            [
                'title' => 'Viel Prominenz beim „Rundgang“ an der Hochschule Flensburg- offizielle Eröffnung von "Flensburg digitalisiert"',
                'bodytext' => 'Der Minister zeigte sich sehr beeindruckt von den Jahresarbeiten der Studierenden und versprach sehr bald wiederzukommen. „Denn die ausgestellten und präsentierten Jahresarbeiten der Studierenden machen Lust auf mehr“, so der Minister. Von der Filmproduktion bis hin zu digitalen Projekten mit VR- Brillen konnten die Besucher einen vielfältigen Einblick in die Bereiche Audio, Animation, Design, App-Entwicklung, Games, Usability, Virtual Reality, Filme und vielem mehr erleben. Davon konnten sich neben dem Wirtschaftsminister auch Flensburgs Oberbürgermeisterin Simone Lange, Stadtpräsident Hannes Fuhrig, die Hochschulräte Dr. Gabriele Kötschau und Hermann Dethleffsen sowie die CDU- Landtagsabgeordnete Uta Wentzel oder auch Dr. Hauke Berndt, der 1. Vorsitzende des Clustermanagements Digitale Wirtschaft Schleswig-Holstein, selbst überzeugen.
                Der Rundgang ist aus dem Terminkalender der Hochschule Flensburg nicht mehr wegzudenken. Wenn die Studierenden der Studiengänge Angewandte Informatik, Medieninformatik, Internationale Fachkommunikation sowie Design, Film und Marketing ihre Arbeiten präsentieren, strömen nicht nur die Hochschulangehörigen aller Fachbereiche und Verwaltungsabteilungen ins A-Gebäude. Auch interessierte Bürger und Bürgerinnen und vor allem Schulklassen waren eingeladen. Mehr als 200 Schülerinnen und Schüler aus Flensburg und Husum sind der Einladung heute gefolgt.
                
                Der Rundgang ist in diesem Jahr eingebettet in einen größeren Rahmen. Zum ersten Mal veranstaltet das Netzwerk Flensburg digitalisiert“ eine viertägige Veranstaltungsreihe zum Thema Digitalisierung. Ziel ist es, den Studierenden, Lehrenden, Schüler*innen und Unternehmer*innen sowie allen an Digitalisierung Interessierten eine Kommunikationsplattform zu bieten, so die Veranstalter. Den Auftakt bildete gestern Abend in der Phänomenta eine Podiumsdiskussion zum Thema Nachwuchsförderung in der IT-Branche. „Die Hochschule Flensburg ist Impulsgeberin für die Region auch im Bereich der Digitalisierung. Daher sind wir stolz auf ein neues Format, das wir gemeinsam mit vielen Partner-Organisationen unserer Region entwickelt haben: „Flensburg digitalisiert“ ist ein Versprechen, die Kompetenzen unserer Hochschule in der Region zur vollen Wirkung kommen zu lassen, so Hochschulpräsident Dr. Christoph Jansen.',
                'published_date' => Carbon::parse('2022-09-22'),
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
                'title' => 'C227',
            ],
            [
                'title' => 'C127',
            ],
            [
                'title' => 'C028',
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
                'speaker' => 'Severin',
            ],
            [
                'speaker' => 'Kurth',
            ],
            [
                'speaker' => 'Neumann',
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
                'lecture_name' => 'Marketing',
            ],
            [
                'lecture_name' => 'Grundlagen der Statistik',
            ],
            [
                'lecture_name' => 'Volkswirtschaftslehre',
            ],
            [
                'lecture_name' => 'Research Methods',
            ],
            [
                'lecture_name' => 'Programming Basics',
            ],
        ];
            
            foreach ($lecture_names as $lecture_name)
            {
                DB::table('lecture_names')->insert($lecture_name);
            }
        

            $lecture_nameRelationships = [
                [ //08-10
                    'lecture_id' => 1,
                    'lecture_name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 1,
                    'lecture_name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 1,
                    'lecture_name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [ //10-12
                    'lecture_id' => 2,
                    'lecture_name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 2,
                    'lecture_name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 2,
                    'lecture_name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [ //12-14
                    'lecture_id' => 3,
                    'lecture_name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 3,
                    'lecture_name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 3,
                    'lecture_name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [ //14-16
                    'lecture_id' => 4,
                    'lecture_name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 4,
                    'lecture_name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 4,
                    'lecture_name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [ //16-18
                    'lecture_id' => 5,
                    'lecture_name_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 5,
                    'lecture_name_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'lecture_id' => 5,
                    'lecture_name_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ];
            foreach ($lecture_nameRelationships as $lecture_nameRelationship) {
                DB::table('lecture_lecture_name')->insert($lecture_nameRelationship);
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