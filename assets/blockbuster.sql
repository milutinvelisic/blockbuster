-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 12:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blockbuster`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `idActor` int(50) NOT NULL,
  `actorFirstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actorLastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actorSrcCover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actorSrcBig` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actorSrcSmall` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `overview` text COLLATE utf8_unicode_ci NOT NULL,
  `biography` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`idActor`, `actorFirstName`, `actorLastName`, `actorSrcCover`, `actorSrcBig`, `actorSrcSmall`, `overview`, `biography`) VALUES
(1, 'Daniel', 'Craig', 'danielcraigcover.jpg', 'danielcraigbig.jpg', 'danielcraigsmall.jpg', 'One of the British theatre\'s most famous faces, Daniel Craig, who waited tables as a struggling teenage actor with the National Youth Theatre, has gone on to star as James Bond in Kazino rojal (2006), Zrno utehe (2008), Skajfol (2012), Spektra (2015), and Bond 25 (2020).', 'He was born Daniel Wroughton Craig on March 2, 1968, at 41 Liverpool Road, Chester, Cheshire, England. His father, Timothy John Wroughton Craig, was a merchant seaman turned steel erector, and then became landlord of the \"Ring O\'Bells\" pub in Frodsham, Cheshire. His mother, Carol Olivia (Williams), was an art teacher. Craig is of English, as well as Welsh, Scottish, and Irish, ancestry. His parents split up in 1972, and young Daniel was raised with his older sister, Lea, in Liverpool, then in Hoylake, Wirral, in the home of his mother. His interest in acting was encouraged by visits to the Liverpool Everyman Theatre arranged by his mother. From the age of 6, Craig started acting in school plays, making his debut in the Frodsham Primary School production of \"Oliver!\", and his mother was the driving force behind his artistic aspirations. The first Bond movie he ever saw at the cinema was Roger Moore\'s Živi i pusti druge da umru (1973); young Daniel Craig saw it with his father, so it took a special place in his heart. He was also a good athlete and was a rugby player at Hoylake Rugby Club.\r\n\r\nAt age 14, Craig played roles in \"Oliver\", \"Romeo and Juliet\" and \"Cinderella\" at Hilbre High School in West Kirby, Wirral. He left Hilbre High School at age 16 to audition at the National Youth Theatre\'s (NYT) troupe on their tour in Manchester in 1984. He was accepted and moved down to London. There, his mother and father watched his stage debut as Agamemnon in Shakespeare\'s \"Troilus and Cressida\". As a struggling actor with the NYT, he was toiling in restaurant kitchens and as a waiter. Craig performed with NYT on tours to Valencia, Spain, and to Moscow, Russia, under the leadership of director Edward Wilson. He failed at repeated auditions at the Guildhall, but eventually his persistence paid off, and in 1988, he entered the Guildhall School of Music and Drama at the Barbican. There, he studied alongside Ewan McGregor and Alistair McGowan, then later Damian Lewis and Joseph Fiennes, among others. He graduated in 1991, after a three-year course under the tutelage of Colin McCormack, the actor from the Royal Shakespeare Company. From 1992-1994, he was married to Scottish actress Fiona Loudon, their daughter, named Ella Craig (born 1992).\r\n\r\nCraig made his film debut in The Power of One (1992). His film career continued on television, notably the BBC2 serial Our Friends in the North (1996). He shot to international fame after playing supporting roles in Lara Kroft: Pljačkaš grobova (2001) and Put bez povratka (2002). He was nominated for his performances in the leading role in U vrtlogu zločina (2004), and received other awards and nominations. Craig was named as the sixth actor to portray James Bond, in October 2005, weeks after he finished his work in Minhen (2005), where he co-starred with Eric Bana under the directorship of Steven Spielberg. Craig\'s reserved demeanor and his avoidance of the showbiz-party-red-carpet milieu makes him a cool 007. He is the first blond actor to play Bond, and also the first to be born after the start of the film series, and also the first to be born after the death of author Ian Fleming in 1964. Four of the past Bond actors: Sean Connery, Roger Moore, Timothy Dalton and Pierce Brosnan have indicated that Craig is a good choice as Bond.'),
(2, 'Judi', 'Dench', 'judidenchcover.jpg', 'judidenchbig.jpg', 'judidenchsmall.jpg', 'Dame Judi Dench was born Judith Olivia Dench in York, England, to Eleanora Olive (Jones), who was from Dublin, Ireland, and Reginald Arthur Dench, a doctor from Dorset, England. She attended Mount School in York, and studied at the Central School of Speech and Drama. She has performed with the Royal Shakespeare Company, the National Theatre, and at Old Vic Theatre.', 'Dame Judi Dench was born Judith Olivia Dench in York, England, to Eleanora Olive (Jones), who was from Dublin, Ireland, and Reginald Arthur Dench, a doctor from Dorset, England. She attended Mount School in York, and studied at the Central School of Speech and Drama. She has performed with the Royal Shakespeare Company, the National Theatre, and at Old Vic Theatre. She is a ten-time BAFTA winner including Best Actress in a Comedy Series for A Fine Romance (1981) in which she appeared with her husband, Michael Williams, and Best Supporting Actress in A Handful of Dust (1988) and Soba sa pogledom (1985). She received an ACE award for her performance in the television series Mr. and Mrs. Edgehill (1985). She was appointed an Officer of the Order of the British Empire (OBE) in 1970, a Dame Commander of the Order of the British Empire (DBE) in 1988 and a Member of the Order of the Companions of Honour (CH) in 2005.'),
(3, 'Javier', 'Bardem', 'javierbardemcover.jpg', 'javierbardembig.jpg', 'javierbardemsmall.jpg', 'Javier Bardem is the youngest member of a family of actors that has been making films since the early days of Spanish cinema.', 'He was born in Las Palmas de Gran Canaria, Spain, to actress Pilar Bardem (María del Pilar Bardem Muñoz) and businessman José Carlos Encinas Doussinague. His maternal grandparents were actors Rafael Bardem and Matilde Muñoz Sampedro, and his uncle is screenwriter Juan Antonio Bardem. He got his start in the family business, at age six, when he appeared in his first feature, \"El picaro\" (1974) (A.K.A. The Scoundrel). During his teenage years, he acted in several TV series, played rugby for the Spanish National Team, and toured the country with an independent theatrical group. Javier\'s early film role as a sexy stud in the black comedy, Šunka, šunka (1992) (aka Ham Ham) propelled him to instant popularity and threatened to typecast him as nothing more than a brawny sex symbol. Determined to avert a beefcake image, he refused similar subsequent roles and has gone on to win acclaim for his ability to appear almost unrecognizable from film to film. With over 25 movies and numerous awards under his belt, it is Javier\'s stirring, passionate performance as the persecuted Cuban writer, Reynaldo Arenas, in Pre nego što padne noć (2000) that will long be remembered as his breakthrough role. He received five Best Actor awards and a Best Actor Oscar nomination for his portrayal.'),
(4, 'Ralph', 'Fiennes', 'ralphfiennescover.jpg', 'ralphfiennesbig.jpg', 'ralphfiennessmall.jpg', 'Actor Ralph Nathaniel Twisleton-Wykeham-Fiennes was born on December 22, 1962 in Suffolk, England, to Jennifer Anne Mary Alleyne (Lash), a novelist, and Mark Fiennes, a photographer. He is the eldest of six children. Four of his siblings are also in the arts: Martha Fiennes, a director; Magnus Fiennes, a musician; Sophie Fiennes, a producer; and Joseph Fiennes, an actor. He is of English, Irish, and Scottish origin.', 'A noted Shakespeare interpreter, he first achieved success onstage at the Royal National Theatre. Fiennes first worked on screen in 1990 and then made his film debut in 1992 as Heathcliff in Emily Brontë\'s Orkanski visovi (1992), opposite Juliette Binoche. 1993 was his \"breakout year\". He had a major role in the controversial Peter Greenaway film Beba iz Mejkona (1993), with Julia Ormond, which was poorly received. Later that year he became known internationally for portraying the amoral Nazi concentration camp commandant Amon Goeth in Steven Spielberg\'s Šindlerova lista (1993). For this he was nominated for the Academy Award for Best Supporting Actor and the Golden Globe Award for Best Supporting Actor. He did not win, but did win the Best Supporting Actor BAFTA Award for the role, as well as Best Supporting Actor honors from numerous critics groups, including the National Society of Film Critics, and the New York, Chicago, Boston, and London Film Critics associations. His portrayal as Göth also earned him a spot on the American Film Institute\'s list of Top 50 Film Villains. To look suitable to represent Goeth, Fiennes gained weight, but he managed to shed it afterwards. In 1994, he portrayed American academic Charles Van Doren in Kviz (1994). In 1996, he was nominated for the Academy Award for Best Actor for his performance as Count Almásy the World War II epic romance, and another Best Picture winner, Anthony Minghella\'s Engleski pacijent (1996), in which he starred with Kristin Scott Thomas. He also received BAFTA and Golden Globe nominations, as well as two Screen Actors Guild (SAG) Award nominations, one for Best Actor and another shared with the film\'s ensemble cast.\r\n\r\nSince then, Fiennes has been in a number of notable films, including Čudni dani (1995), Oscar and Lucinda (1997), the animated Kraljević Egipta (1998), István Szabó\'s Sunshine (1999), Neil Jordan-directed films Kraj jedne ljubavne priče (1999) and Kockar (2002), Crveni zmaj (2002), Sobarica i senator (2002), Brižni baštovan (2005), Gangsteri na odmoru (2008), Čitač (2008), co-starring Kate Winslet, Kathryn Bigelow\'s Oscar®-winning Katanac za bol (2008), Borba Titana (2010), Mike Newell\'s screen adaptation of Charles Dickens\'Great Expectations (2012), with Helena Bonham Carter and Jeremy Irvine, and Wes Anderson\'s Grand Budapest hotel (2014).\r\n\r\nHe is also known for his roles in major film franchises such as the Harry Potter film series (2005-2011), in which he played the evil Lord Voldemort. His nephew, Hero Fiennes Tiffin played Tom Riddle, the young Lord Voldemort, in Hari Poter i Polukrvni princ (2009). Ralph also appears in the James Bond series, in which he has played M, starting with the 2012 film Skajfol (2012).\r\n\r\nIn 2011, Fiennes made his directorial debut with his film adaptation of Shakespeare\'s tragedy political thriller Koriolan (2011), in which he also played the title character, opposite Gerard Butler and Vanessa Redgrave. Fiennes has won a Tony Award for playing Prince Hamlet on Broadway.\r\n\r\nIn 2015, Fiennes played a music producer in Luca Guadagnino\'s Rasprskavanje (2015), starring opposite Tilda Swinton and Matthias Schoenaerts, and in 2016, Fiennes starred in Joel and Ethan Coen\'s Ave Cezare (2016).\r\n\r\nSince 1999, Fiennes has served as an ambassador for UNICEF UK.\r\n'),
(6, 'Tom', 'Cruise', 'tomcruisecover.jpg', 'tomcruisebig.jpg', 'tomcruisesmall.jpg', 'In 1976, if you had told fourteen year-old Franciscan seminary student Thomas Cruise Mapother IV that one day in the not too distant future he would be Tom Cruise, one of the top 100 movie stars of all time, he would have probably grinned and told you that his ambition was to join the priesthood. Nonetheless, this sensitive, deeply religious youngster who was born in 1962 in Syracuse, New York, was destined to become one of the highest paid and most sought after actors in screen history.', 'Tom is the only son (among four children) of nomadic parents, Mary Lee (Pfeiffer), a special education teacher, and Thomas Cruise Mapother III, an electrical engineer. His parents were both from Louisville, Kentucky, and he has German, Irish, and English ancestry. Young Tom spent his boyhood always on the move, and by the time he was 14 he had attended 15 different schools in the U.S. and Canada. He finally settled in Glen Ridge, New Jersey, with his mother and her new husband. While in high school, Tom wanted to become a Priest but pretty soon he developed an interest in acting and abandoned his plans of becoming a priest, dropped out of school, and at age 18 headed for New York and a possible acting career. The next 15 years of his life are the stuff of legends. He made his film debut with a small part in Endless Love (1981) and from the outset exhibited an undeniable box office appeal to both male and female audiences.\r\n\r\nWith handsome movie star looks and a charismatic smile, within 5 years Tom Cruise was starring in some of the top grossing films of the 1980s including Top gan (1986); Boja novca (1986), Kišni čovek (1988) and Rođen četvrtog jula (1989). By the 1990s he was one of the highest paid actors in the world earning an average 15 million dollars a picture in such blockbuster hits as Intervju sa vampirom (1994), Nemoguća misija (1996) and Džeri Megvajer (1996) for which he received an Academy Award Nomination for best actor. Tom Cruise\'s biggest franchise , Mission Impossible has also earned a total of 3 billion dollars worldwide. Tom cruise has also shown lots of interest in producing with his biggest producer credits being the Mission impossible franchise.\r\n\r\nIn 1990 he renounced his devout Catholic beliefs and embraced The Church Of Scientology claiming that Scientology teachings had cured him of the dyslexia that had plagued him all of his life. A kind and thoughtful man well known for his compassion and generosity, Tom Cruise is one of the best liked members of the movie community. He was married to actress Nicole Kidman until 2001. Thomas Cruise Mapother IV has indeed come a long way from the lonely wanderings of his youth to become one of the biggest movie stars ever.'),
(7, 'Morgan', 'Freeman', 'morganfreemancover.jpg', 'morganfreemanbig.jpg', 'morganfreemansmall.jpg', 'With an authoritative voice and calm demeanor, this ever popular American actor has grown into one of the most respected figures in modern US cinema. Morgan was born on June 1, 1937 in Memphis, Tennessee, to Mayme Edna (Revere), a teacher, and Morgan Porterfield Freeman, a barber. The young Freeman attended Los Angeles City College before serving several years in the US Air Force as a mechanic between 1955 and 1959. His first dramatic arts exposure was on the stage including appearing in an all-African American production of the exuberant musical Hello, Dolly!.', 'Throughout the 1970s, he continued his work on stage, winning Drama Desk and Clarence Derwent Awards and receiving a Tony Award nomination for his performance in The Mighty Gents in 1978. In 1980, he won two Obie Awards, for his portrayal of Shakespearean anti-hero Coriolanus at the New York Shakespeare Festival and for his work in Mother Courage and Her Children. Freeman won another Obie in 1984 for his performance as The Messenger in the acclaimed Brooklyn Academy of Music production of Lee Breuer\'s The Gospel at Colonus and, in 1985, won the Drama-Logue Award for the same role. In 1987, Freeman created the role of Hoke Coleburn in Alfred Uhry\'s Pulitzer Prize-winning play Driving Miss Daisy, which brought him his fourth Obie Award. In 1990, Freeman starred as Petruchio in the New York Shakespeare Festival\'s The Taming of the Shrew, opposite Tracey Ullman. Returning to the Broadway stage in 2008, Freeman starred with Frances McDormand and Peter Gallagher in Clifford Odets\' drama The Country Girl, directed by Mike Nichols.\r\n\r\nFreeman first appeared on TV screens as several characters including \"Easy Reader\", \"Mel Mounds\" and \"Count Dracula\" on the Children\'s Television Workshop (now Sesame Workshop) show The Electric Company (1971). He then moved into feature film with another children\'s adventure, Who Says I Can\'t Ride a Rainbow! (1971). Next, there was a small role in the thriller Blade (1973); then he played Casca in Julius Caesar (1979) and the title role in Coriolanus (1979). Regular work was coming in for the talented Freeman and he appeared in the prison dramas Attica (1980) and Brubaker (1980), Očevidac (1981), and portrayed the final 24 hours of slain Malcolm X in Death of a Prophet (1981). For most of the 1980s, Freeman continued to contribute decent enough performances in films that fluctuated in their quality. However, he really stood out, scoring an Oscar nomination as a merciless hoodlum in Street Smart (1987) and, then, he dazzled audiences and pulled a second Oscar nomination in the film version of Vozeći gospođicu Dejzi (1989) opposite Jessica Tandy. The same year, Freeman teamed up with youthful Matthew Broderick and fiery Denzel Washington in the epic Civil War drama Rat za slavu (1989) about freed slaves being recruited to form the first all-African American fighting brigade.\r\n\r\nHis star continued to rise, and the 1990s kicked off strongly with roles in Lomača taštine (1990), Robin Hud - Princ lopova (1991), and The Power of One (1992). Freeman\'s next role was as gunman Ned Logan, wooed out of retirement by friend William Munny to avenge several prostitutes in the wild west town of Big Whiskey in Clint Eastwood\'s de-mythologized western Neoprošteno (1992). The film was a sh and scored an acting Oscar for Gene Hackman, a directing Oscar for Eastwood, and the Oscar for best picture. In 1993, Freeman made his directorial debut on Bopha! (1993) and soon after formed his production company, Revelations Entertainment.\r\n\r\nMore strong scripts came in, and Freeman was back behind bars depicting a knowledgeable inmate (and obtaining his third Oscar nomination), befriending falsely accused banker Tim Robbins in Bekstvo iz Šošenka (1994). He was then back out hunting a religious serial killer in Sedam (1995), starred alongside Keanu Reeves in Lančana reakcija (1996), and was pursuing another serial murderer in Poljubi devojke (1997).\r\n\r\nFurther praise followed for his role in the slave tale of Amistad (1997), he was a worried US President facing Armageddon from above in Veliki udar (1998), appeared in Neil LaBute\'s black comedy Sestra Beti (2000), and reprised his role as Alex Cross in U paukovoj mreži (2001). Now highly popular, he was much in demand with cinema audiences, and he co-starred in the terrorist drama Svi naši strahovi (2002), was a military officer in the Stephen King-inspired Zamka za snove (2003), gave divine guidance as God to Jim Carrey in Svemogući Brus (2003), and played a minor role in the comedy Prevaranti (2004).\r\n\r\n2005 was a huge year for Freeman. First, he he teamed up with good friend Clint Eastwood to appear in the drama, Devojka od milion dolara (2004). Freeman\'s on-screen performance is simply world-class as ex-prize fighter Eddie \"Scrap Iron\" Dupris, who works in a run-down boxing gym alongside grizzled trainer Frankie Dunn, as the two work together to hone the skills of never-say-die female boxer Hilary Swank. Freeman received his fourth Oscar nomination and, finally, impressed the Academy\'s judges enough to win the Best Supporting Actor Oscar for his performance. He also narrated Steven Spielberg\'s Rat svetova (2005) and appeared in Betmen počinje (2005) as Lucius Fox, a valuable ally of Christian Bale\'s Bruce Wayne/Batman for director Christopher Nolan. Freeman would reprise his role in the two sequels of the record-breaking, genre-redefining trilogy.\r\n\r\nRoles in tentpoles and indies followed; highlights include his role as a crime boss in Dobitna kombinacija (2006), a second go-round as God in Svemogući Evan (2007) with Steve Carell taking over for Jim Carrey, and a supporting role in Ben Affleck\'s directorial debut, Nestala bez traga (2007). He co-starred with Jack Nicholson in the breakout hit Lista poslednjih želja (2007) in 2007, and followed that up with another box-office success, Tražen (2008), then segued into the second Batman film, Mračni vitez (2008).\r\n\r\nIn 2009, he reunited with Eastwood to star in the director\'s true-life drama Nepobedivi (2009), on which Freeman also served as an executive producer. For his portrayal of Nelson Mandela in the film, Freeman garnered Oscar, Golden Globe and Critics\' Choice Award nominations, and won the National Board of Review Award for Best Actor.\r\n\r\nRecently, Freeman appeared in Opasni penzioneri (2010), a surprise box-office hit; he narrated the Konan varvarin (2011) remake, starred in Rob Reiner\'s Magija lepog ostrva (2012); and capped the Batman trilogy with Uspon Mračnog viteza (2012). Freeman has several films upcoming, including the thriller Velika iluzija (2013), under the direction of Louis Leterrier, and the science fiction actioner Zaborav (2013), in which he stars with Tom Cruise.'),
(8, 'Olga', 'Kurylenko', 'olgakurylenkocover.jpg', 'olgakurylenkobig.jpg', 'olgakurylenkosmall.jpg', 'Olga Kurylenko, a Ukrainian-born actress and model, went from sharing a cramped flat with her aunt, uncle, grandparents and cousin to starring as a Bond girl opposite Daniel Craig.', 'She was born Olga Konstantinovna Kurylenko on November 14, 1979, in Berdyansk, Ukraine, Soviet Union. Her mother, Marina Alyabysheva, divorced her father, Konstantin Kurylenko, soon after her birth. After the divorce her mother struggled to survive as an art teacher. Young Olga was brought up by her mother and her grandmother, Raisa. During her youth Olga had the humbling experience of living in poverty; she had no choice but to wear rags and had to darn the holes on her sweater. During her years in Ukraine she studied art and languages and spent seven years studying piano at a local school of music in Berdyansk. She also went to a ballet studio until 13.\r\n\r\nAt age 13 Olga and her mother made a trip to Moscow. There she was spotted by an agent, who approached her at a subway station and offered her a job as a model. Initially Olga\'s mother was suspicious, but she checked the agent\'s credentials and eventually allowed Olga to accept training as a model in Moscow, which turned out to be a good career choice.\r\n\r\nBy age 16 she was ready for the next step. She moved to Paris, learned French in six months and was signed by the Madison agency. At age 18 she appeared on the cover of Glamour, and in short order graced the covers of Elle, Madame Figaro, Marie Claire, and Vogue. She also became the face of Lejaby lingerie, Bebe clothing, Clarins and Helena Rubinstein cosmetic companies.\r\n\r\nIn 1999 Olga married French photographer Cedric Van Mol, but divorced him 3-1/2 years later. One day Olga presented herself to an acting agency. Eventually she swapped the catwalk for the movie screen, and her acting career took off. In 2005 she made her film debut as \"Iris\", a sensual beauty, in Prst sudbine (2005), by director Diane Bertrand.\r\n\r\nOlga\'s cinematic roles have been notably steamy, and her natural beauty and explicit nudity attracted the attention of the male audiences. She appeared opposite Elijah Wood in Pariz, s ljubavlju (2006) and as \"Sofia\" in Le serpent (2006), then co-starred as Russian beauty \"Nika Boronina\" opposite Timothy Olyphant in Hitmen: Plaćeni ubica (2007). She also appeared as \"Mina Harud\" in the indie surveillance-thriller Tyranny (2008). On Christmas Eve 2007, Olga was offered to play what will become her biggest hit: co-starring as \"Camille\", the Bond girl, opposite Daniel Craig in Zrno utehe (2008), a sequel to Kazino rojal (2006).\r\n\r\nWith the international success as Bond Girl, Olga also made appearances on various TV productions in Russia and Ukraine. In 2012, Olga Kurylenko was cast as Julia, supporting role in the Sci-Fi adventure Zaborav (2013) opposite Tom Cruise and Morgan Freeman.'),
(10, 'Nikolaj', 'Coster-Waldau', 'nikolajcosterwaldaucover.jpg', 'nikolajcosterwaldaubig.jpg', 'nikolajcosterwaldausmall.jpg', 'Nikolaj Coster-Waldau (born 27 July 1970) is a Danish actor, producer and screenwriter. He graduated from the Danish National School of Theatre in Copenhagen in 1993. Coster-Waldau\'s breakthrough performance in Denmark was his role in the film Nightwatch (1994). Since then he has appeared in numerous films in his native Scandinavia and Europe in general, including Headhunters (2011) and A Thousand Times Good Night (2013).', 'In the United States, his debut film role was in the war film Black Hawk Down (2001), playing Medal of Honor recipient Gary Gordon. He then played Detective John Amsterdam in the short-lived Fox television series New Amsterdam (2008), as well as appearing as Frank Pike in the 2009 Fox television film Virtuality, originally intended as a pilot. He became widely known for his role as Jaime Lannister in the HBO fantasy series Game of Thrones, for which he received a Primetime Emmy Award nomination for Outstanding Supporting Actor in a Drama Series in 2018. He is a UNDP Goodwill Ambassador, drawing attention to critical issues such as gender equality and climate change.\r\n\r\nCoster-Waldau was born in Rudkøbing, Denmark, the son of Hanne Søborg Coster, a librarian, and Jørgen Oscar Fritzer Waldau (died 1998). He has spoken in interviews about his father\'s problems with alcohol, as well as his parents\' divorce. He has two older sisters, and was raised mainly by his mother. He grew up in Tybjerg, a small village between Ringsted and Næstved in southern Zealand. Coster-Waldau was the youngest actor to enter the Danish National School of Theatre and Contemporary Dance (Danish: Statens Teaterskole), where he was educated from 1989 to 1993.\r\n\r\nIn 2001, he began his U.S. career in Ridley Scott\'s Black Hawk Down as Medal of Honor recipient Gary Gordon. Coster-Waldau says \"My first U.S. movie was Black Hawk Down and a friend helped me put myself on tape up on the attic over my apartment in Copenhagen. We shipped it out and I got lucky.\"\r\n\r\nSince April 2011, Coster-Waldau has played Jaime Lannister in the HBO hit series Game of Thrones, based on George R. R. Martin\'s best-selling A Song of Ice and Fire fantasy novel series. He commented about the character \"What\'s not to like about Jaime? As an actor I couldn\'t ask for a better role\". For his role as Jaime Lannister he has received several accolades, including Primetime Emmy Award, Screen Actors Guild Award, Critics\' Choice Television Award, Saturn Award and People\'s Choice Award nominations.\r\n\r\nIn 2011, he also starred alongside Sam Shepard in Mateo Gil\'s feature Blackthorn, which premiered at the Tribeca Film Festival. Later the same year he starred in Morten Tyldum\'s Headhunters. The film went on to be the highest-grossing Norwegian film of all-time and received very positive reviews including a BAFTA Award nomination for Best Foreign Film. Coster-Waldau starred in the 2013 horror film Mama alongside Jessica Chastain, which debuted at number one in the US box office and grossed over $140 million worldwide. He went on to play Sykes, a military weapons expert in the science fiction action thriller film Oblivion. The same year he co-starred with Juliette Binoche in Erik Poppe\'s drama A Thousand Times Good Night. In 2014, he starred in Susanne Bier\'s Danish thriller A Second Chance as Andreas, a police officer forced to make a difficult choice. In 2016, Coster-Waldau appeared in the action-fantasy film Gods of Egypt as Horus.\r\n\r\nIn early 2017, he starred in E.L. Katz\'s dark comedy Small Crimes which premiered at South by Southwest film festival on 11 March 2017, to positive reviews. Coster-Waldau then appeared in the Danish film 3 Things, a thriller about a prime suspect of a bank robbery who negotiates the terms of his witness protection deal. He starred in Roman Waugh\'s prison film Shot Caller, which premiered at the Los Angeles Film Festival on 16 June 2017. Since January 2018 he has been the L\'Oréal Paris global spokesperson for the company\'s Men Expert line of products. In May 2017, it was announced that he is attached to star in Domino, a film directed by Brian De Palma. He is also set to star in The Silencing, a thriller directed by Anders Engstom.\r\n\r\nAlthough Coster-Waldau is not religious, like the vast majority of Danes, he was baptized and confirmed as a Lutheran in the Danish National Church during his youth and viewed his confirmation as a big moment in his life when he first identified as becoming an adult. He married Nukâka, a Greenlandic actress and singer, in 1998, and they live in Kongens Lyngby with their two daughters as well as two dogs. Their daughter Filippa has starred in a Danish short film, The Girl and the Dogs, which was shown at the Cannes Film Festival in 2014. His father-in-law is Josef Motzfeldt, a member of the Parliament of Greenland and former leader of the Community of the People party. He is a supporter of English football club Leeds United and he is a member of the Leeds United Supporters\' Trust.'),
(11, 'Jake', 'Gyllenhaal', 'jakegyllenhaalcover.jpg', 'jakegyllenhaalbig.jpg', 'jakegyllenhaalsmall.jpg', 'Jacob Benjamin Gyllenhaal was born in Los Angeles, California, to producer/screenwriter Naomi Foner (née Achs) and director Stephen Gyllenhaal. He is the brother of actress Maggie Gyllenhaal, who played his sister in Doni Darko (2001). His godmother is actress Jamie Lee Curtis. His mother is from a Jewish family, and his father\'s ancestry includes Swedish, English and Swiss-German.', 'At the age of eleven, Gyllenhaal made his movie debut in the comedy-drama Gradski kauboji (1991), playing Billy Crystal\'s character\'s son. He made an impact in various films in the late 1990s and early 2000s, in films such as the period drama Oktobarsko nebo (1999), his breakthrough performance, and as the title role in the psychological thriller Doni Darko (2001), for which he received an Independent Spirit Award nomination for Best Actor, playing a psychologically troubled teenager. He followed this with roles encompassing many different genres, including the comedy film, the Disney romantic comedy Bubble Boy (2001); opposite Jennifer Aniston in another Sundance favorite, The Good Girl (2002), as a young man grieving the death of his fiancée in Moonlight Mile (2002), and in the science fiction blockbuster Dan posle sutra (2004), portraying a student caught in a cataclysmic climate event, opposite Dennis Quaid.\r\n\r\nMaking his theater debut, Gyllenhaal appeared on the London stage with a starring role in Kenneth Lonergan\'s revival of \"This Is Our Youth\". The play was widely-received and played for eight weeks in London\'s West End. Gyllenhaal followed his successful theater en devour with a role in Marinac (2005), playing Anthony \"Swoff\" Swofford, an aggressive and masculine but equally vulnerable and sensitive Marine during the Gulf War, and Dokaz (2005), as Gwyneth Paltrow\'s love interest. However, it was his follow-up performance that won critical acclaim in Planina Broukbek (2005), in which he co-starred with Australian actor Heath Ledger, as sheep herders who fall in love in the 1960s and depicts their relationship over the 1960s, 1970s and early 1980s.\r\n\r\nFor his role as Jack Twist, Gyllenhaal received critical acclaim and won the BAFTA Award for Best Actor in a Supporting Role and was nominated for the Screen Actors Guild Award for Outstanding Performance by a Male Actor in a Supporting Role, the Satellite Award for Best Supporting Actor - Motion Picture, and the Academy Award for Best Supporting Actor. Since then, he has acted in a wide range of movies, ranging from the critically-acclaimed thriller, Zodijak (2007), the drama Braća (2009), playing opposite Tobey Maguire as the title siblings, in the action adventure film, Princ od Persije: Pesak vremena (2010), sporting a bulked-up physique, and the box office hit, Ljubav i drugi stimulansi (2010), in which he teamed up with Anne Hathaway, once again, and for which he was nominated for a Golden Globe Award for Best Actor - Motion Picture Musical or Comedy.\r\n\r\nIn the 2010s, Gyllenhaal starred in several major films for which he received significant critical acclaim: science fiction thriller 8 Minuta (2011), police drama Poslednja straža (2012), mystery Zatvorenici (2013), dark media satire Noćne hronike (2014), the boxing drama Леворуки (2015), and the dramedy Demolition (2015). For Nightcrawler, he was nominated for the Golden Globe Award for Best Actor - Motion Picture Drama, the Screen Actors Guild Award for Outstanding Performance by a Male Actor in a Leading Role, and the BAFTA Award for Best Actor in a Leading Role.\r\n\r\nGyllenhaal is the godfather of Matilda Ledger (aka Matilda Rose Ledger), daughter of the late actor Heath Ledger and Michelle Williams. Gyllenhaal\'s most significant personal relationships have been with actresses Kirsten Dunst and Reese Witherspoon. He is friends with Maroon 5 frontman Adam Levine, having known him since kindergarten. He is good friends with his sister\'s husband and Marinac (2005) co-star, actor Peter Sarsgaard.'),
(12, 'Johnny', 'Galecki', 'johnnygaleckicover.jpg', 'johnnygaleckibig.jpg', 'johnnygaleckismall.jpg', 'John Mark Galecki was born in Bree, Belgium, to American parents; his father was stationed there while serving in the U.S. Air Force. When he was three years old, his family moved to Chicago, Illinois, where he grew up with his parents, Mary Lou and Richard Galecki, and siblings, sister Allison (1980) and brother Nick (1982). His father was of Polish descent, and his mother\'s ancestry is Irish and Italian. His mother was a mortgage consultant and his father became a teacher for blind veterans in a VA hospital outside of Chicago. When Galecki was sixteen, his father died in an accident.', 'His mother recalled in an interview with People magazine that Galecki was a very artistic kid; at only 4 years old, he told her: \"Mom, I\'m gonna be on T.V., and I don\'t mean when I grow up.\" Two years later, when their attempts to distract him with sports failed, Galecki\'s parents took him to open auditions at local theaters in Chicago. He landed his first role in \"Fiddler on the Roof,\" and more parts in other productions followed. By age 11, he was already known as an excellent actor in Chicago\'s theater scene evidenced by him receiving a Joseph Jefferson Citation nomination for portraying John Henry in \"The Member of the Wedding.\"\r\n\r\nIn 1989 he was cast in his first movie, a holiday film called Prancer (1989), but his big break was in another Christmas movie as Chevy Chase\'s son Rusty Griswold, in Najluđi Božić (1989). On the set, Chase took a liking to him, and Galecki recalled in a later interview that Chevy Chase showed him some tricks for comedic timing.\r\n\r\nBy that time, his whole family had moved from Chicago to L.A. to support his career. But within 10 months they realized they missed Chicago too much, and moved back home. Galecki, still just 14, was under contract on a show with Robert Urich called \"American Dreamer (1990)\", so he stayed in L.A. Although he was living alone in a studio apartment, he never got into trouble and was a good kid. He recalled living alone in L.A. without adult supervision as \"not fun\" and \"quite intimidating and lonely, to be honest. But I\'ve always been happiest when I\'m working, so...\" He bought a motorcycle with a mirrored helmet so he could get to work and back, at Paramount studios.\r\n\r\nIn 1991 Galecki was picked by Roseanne Barr to play her son in the made for T.V. movie Backfield in Motion (1991). She liked him so much she asked him to come on her sitcom for what started as a one-off appearance, but soon turned into the important recurring role of David Healy. His family was religious viewers of the show and he was somewhat intimidated at first to be working with his television heroes. However, before long, it was his heroes that praised him: Roseanne said he showed \"great vulnerability.\" John Goodman said: \"If he was one of those little stuffed bears at a carny, he\'d have a Wuv me t-shirt on. People just want to take care of him.\" Galecki also became very close friends with co-star Sara Gilbert and the show\'s executive producer Eric Gilliland.\r\n\r\nAfter Rozen (1988) he worked on a number of diverse roles, from funny Ira alongside Christopher Walken in the 1997 dark-comedy Kraljevi samoubistva (1997) to a drug-addicted student in 2003\'s Bookies (2003), and he played gay characters in Don Roos\'s Skok (2000) and Suprotni pol (1997). He never stayed far from the television industry as he made guest appearances such as Laurie Freeman\'s younger lover in The Norm Show (1999) (where he once again worked with Laurie Metcalf, his former Roseanne cast mate), as a golfer in Zovem se Erl (2005), as Houp i Fejt (2003)\'s younger brother in the sitcom of the same name, and as hilarious party-boy Trouty on My Boys (2006). In 2006 he returned to his theater roots as he took on the role of conflicted but sweet male escort Alex in Douglas Carter Beane\'s play \"The Little Dog Laughed,\" for which he received a 2007 Theatre World Award for Outstanding Browdway Debut.\r\n\r\nIn 2007 he was back on the small screens, starring as Leonard Hofstadter in the sitcom Štreberi (2007). Not only was Chuck Lorre, a former producer for Roseanne, a producer of the new show, but Sara Gilbert and Laurie Metcalf both made guest appearances.\r\n\r\nGalecki is a self-admitted motorcycle \"nerd,\" and drives a Harley Davidson Softail Deluxe. Although he never went to college, he has said: \"I\'m not dead! We should never stop learning. We should never stop absorbing,\" and so he learned how to play the cello in his early twenties. He likes traveling around the world, painting, music (he also plays bass), and hiking with his dog Vera.\r\n\r\nHe always has been very private about his personal life and little is known about past relationships. It has only been confirmed that he dated actresses Laura Harris and Kaley Cuoco. He isn\'t on twitter, and Galecki once said, \"I don\'t understand the current frame of mind in our society that seems to say that any action is not of value until it\'s broadcast somehow.\"\r\n\r\nHe still lives in Los Angeles but is often spotted in Chicago, where his siblings still live.'),
(13, 'Jim', 'Parson', 'jimparsoncover.jpg', 'jimparsonbig.jpg', 'jimparsonsmall.jpg', 'Having grown up in Houston, and its northern suburb of Spring, he made his first stage appearance in a school play at the age of 6. Parsons then went on to study theater at the University of Houston. From there he won a place on a two-year Masters course in classical theater at the University of San Diego/The Old Globe Theater, graduating in 2001.', 'Having grown up in Houston, and its northern suburb of Spring, he made his first stage appearance in a school play at the age of 6. Parsons then went on to study theater at the University of Houston. From there he won a place on a two-year Masters course in classical theater at the University of San Diego/The Old Globe Theater, graduating in 2001.\r\n\r\nHe moved to New York, working in Off-Broadway productions, appearing in TV commercials and in one episode of Ed (2000) before landing a recurring role in Judging Amy (1999) in 2004.\r\n\r\nHe was propelled to international fame and acclaim three years later when he starred as Sheldon in the award-winning sitcom, Štreberi (2007).'),
(14, 'Kaley', 'Cuoco', 'kaleycuococover.jpg', 'kaleycuocobig.jpg', 'kaleycuocosmall.jpg', 'Kaley Christine Cuoco was born in Camarillo, California, to Layne Ann (Wingate) and Gary Carmine Cuoco, a realtor. She is of Italian (father) and German and English (mother) descent.', 'Kaley Christine Cuoco was born in Camarillo, California, to Layne Ann (Wingate) and Gary Carmine Cuoco, a realtor. She is of Italian (father) and German and English (mother) descent. A model and commercial actress from the age of 6, Cuoco\'s first major role was in the TV movie U živom pesku (1992) with Donald Sutherland and Tim Matheson. Her other television credits include guest-starring on the series Ellen (1994) (where she played \"little Ellen\" to the Ellen DeGeneres character), Život na severu (1990), Don\'t Forget Your Toothbrush (1995) and Moj takozvani život (1994). In addition, she played a leading role in the miniseries, Mr. Murder (1998). Cuoco has appeared in the feature films Lucky 13 (2005), Savršena slika (1997) and Virtuoznost (1995). On stage, she has performed in Los Angeles-area productions of \"Annie\" and \"Fiddler on the Roof\". When she\'s not acting, Cuoco is an avid tennis player, who consistently ranks well in Southern California Tennis Association standings as a member of a regional amateur division team. In addition, she enjoys spending time with friends, going to the mall, and hip-hop dancing. Cuoco was home-schooled, and lives in Ventura County, California with her family.\r\n\r\nShe was previously married to Ryan Sweeting.'),
(15, 'Simon', 'Helberg', 'simonhelbergcover.jpg', 'simonhelbergbig.jpg', 'simonhelbergsmall.jpg', 'Simon Helberg was born and raised in Los Angeles but despite this, and the fact that his father is the actor Sandy Helberg and his mother the casting director Harriet B. Helberg, his main interest as a young boy was karate. ', 'Simon Helberg was born and raised in Los Angeles but despite this, and the fact that his father is the actor Sandy Helberg and his mother the casting director Harriet B. Helberg, his main interest as a young boy was karate. In his teens, though, he discovered acting and went on to study at New York University\'s Tisch School of the Arts where he trained at the Atlantic Theater Company. He started acting in 1999, taking guest roles and small parts, establishing himself as a character performer and able sketch comedian. Solid TV work followed throughout the 2000s until he was cast as Howard Wolowitz in the hit TV comedy Štreberi (2007) for which he remains best known.'),
(16, 'Kunal', 'Nayyar', 'kunalnayyarcover.jpg', 'kunalnayyarbig.jpg', 'kunalnayyarsmall.jpg', 'Kunal Nayyar is an Indian actor. He moved from India to the US in 1999. He first moved to Portland, Oregon, to study business. He started acting in plays as a way of making new friends. ', 'Kunal Nayyar is an Indian actor. He moved from India to the US in 1999. He first moved to Portland, Oregon, to study business. He started acting in plays as a way of making new friends. He took acting classes, but he went on to graduate from the University of Portland with a degree in business, as something to fall back on. He then went on to get a master\'s degree in fine arts from Temple University in Philadelphia, Pennsylvania. He did some work for the prestigious Royal Shakespeare Company in Stratford, UK. He then landed his breakthrough role in Štreberi (2007) in 2007, just a year after graduating.'),
(17, 'Melissa', 'Rauch', 'melissarauchcover.jpg', 'melissarauchbig.jpg', 'melissarauchsmall.jpg', 'Melissa Ivy Rauch was born in Marlboro, New Jersey, to Susan and David Rauch. She has a brother, Ben, and was raised in a Jewish household. Rauch attended Marymount Manhattan College in New York City, where she received a BFA degree. ', 'Melissa Ivy Rauch was born in Marlboro, New Jersey, to Susan and David Rauch. She has a brother, Ben, and was raised in a Jewish household. Rauch attended Marymount Manhattan College in New York City, where she received a BFA degree. While going to school, Melissa performed stand-up comedy around Manhattan, and soon made a name for herself on the NYC comedy scene. Her one-woman show, \"The Miss Education of Jenna Bush\", in which she portrayed Jenna Bush, the former President\'s daughter, garnered critical acclaim and played to sold-out audiences (Outstanding Solo Show and TheaterMania\'s Audience Favorite Award--New York International Fringe Festival/HBO\'s US Comedy Arts Festival).\r\n\r\nMelissa resides in Los Angeles, California, with Winston Rauch (born Winston Beigel), her husband and writing partner.'),
(18, 'Mayim', 'Bialik', 'mayimbialikcover.jpg', 'mayimbialikbig.jpg', 'mayimbialiksmall.jpg', 'Mayim Bialik grew up in San Diego and got her first acting job (Bundevoglavi (1988)) when she was just 12 years old. A number of TV roles followed until in 1990 she was cast in Blossom (1990), the role which made her famous.', 'Mayim Bialik grew up in San Diego and got her first acting job (Bundevoglavi (1988)) when she was just 12 years old. A number of TV roles followed until in 1990 she was cast in Blossom (1990), the role which made her famous.\r\n\r\nBy 1993, while Blossom was still airing, she had already won a deferred place at Harvard and was also accepted by Yale but chose in the end to attend UCLA. She was awarded her Bachelor\'s degree in 2000 and began reading for a PhD in Neuroscience (studying Obsessive-Compulsive Disorder in adolescents with Prader-Willi syndrome) which she eventually completed in 2007.\r\n\r\nShe continued working throughout her studies and was a regular on US TV screens, becoming a Prime Time face again in 2010 when she began her regular appearances as \"Sheldon\'s friend who is not his girlfriend\" in the hit series Štreberi (2007).'),
(19, 'Gabriel', 'Macht', 'gabrielmachtcover.jpg', 'gabrielmachtbig.jpg', 'gabrielmachtsmall.jpg', 'Gabriel Macht is an American actor. He was born in the Bronx, New York, to Suzanne, a museum curator and archivist, and actor Stephen Macht. Gabriel has three siblings, and moved with his parents to California when he was young.', 'Gabriel had his first success on screen when he was 8-years-old. He was nominated for a Best Young Motion Picture Actor Award for his performance in the movie Why Would I Lie? (1980). Briefly withdrawing from the business as a child, he returned as an adult with favorable roles that further developed his talents. After high school, Macht studied theatre at Carnegie Mellon School of Drama in Pittsburgh. Macht remains active in the theater and is involved with the Mad Dog Theater Company in New York where he performed the play \"To Whom It May Concern\" for the company at the Belgrade International Theatre Festival in 1997. His other theater credits include \"Steve Martin\'s Picasso at the Lapin Agile\" at Promenade Theater Off Broadway and Theater on the Square in San Francisco; Roger Kumble\'s \"Turnaround\" at the Coast Playhouse in Los Angeles; \"La Ronde\" directed by Joanne Woodward at Williamstown Theater Festival; \"What the Butter Saw\" directed by Joe Dowling at Arena Stage in Washington DC. On the big screen, Macht was seen in Edward Zwick\'s highly acclaimed, \"Love & Other Drugs\" where he starred opposite Jake Gyllenhaal and Anne Hathaway who were both nominated for Golden Globes® for their performances. Macht also starred in the comic book inspired film, \"The Spirit\" as the titular character opposite Samuel Jackson, Scarlett Johannson, and Eva Mendes directed by Frank Miller. He was previously seen in Robert De Niro\'s critically acclaimed film, \"The Good Shepherd\" with Matt Damon and Angelina Jolie. Macht\'s additional screen credits include the comic drama \"Middle Men\" with Giovanni Ribisi and Luke Wilson, the arctic thriller \"Whiteout\" with Kate Beckinsale, the romantic comedy \"Because I Said So\" with Diane Keaton; Joel Schumacher\'s \"Bad Company\" opposite Anthony Hopkins; \"The Recruit\" opposite Al Pacino and Colin Farrell; \"Behind Enemy Lines\" with Owen Wilson and Gene Hackman and \"American Outlaws\" where he first starred opposite Colin Farrell. His role in \"A Love Song for Bobby Long\" garnered Macht critical acclaim for his performance as the tormented writer, Lawson Pines\' starring opposite John Travolta and Scarlett Johansson in the 2004 film. On television, Macht had guest starring roles on \"Sex and the City,\" and \"Spin City\" and was a regular on Steven Spielberg\'s supernatural drama for NBC \"The Others,\" and starred as William Holden in ABC\'s \"The Audrey Hepburn Story\".\r\n\r\nMacht is best known for his role as Harvey Specter in USA drama Odela (2011). He resides in New York, Los Angeles, and the Sunshine Coast, Australia. He is of Ashkenazi Jewish descent on both sides of his family.'),
(20, 'Rick', 'Hoffman', 'rickhoffmancover.jpg', 'rickhoffmanbig.jpg', 'rickhoffmansmall.jpg', 'Born June 12, 1970 in New York City, New York and raised in Roslyn Heights, New York, Rick Hoffman graduated from The Wheatley School in Old Westbury, NY before attending the University of Arizona. After graduating from University of Arizona, Rick moved to Los Angeles to start an acting career. He landed his first role as a security guard in Teorija zavere (1997) . He was so nervous he flubbed his two lines. Fortunately, his misread got laughs from Julia Roberts , Richard Donner and the entire crew, and was included in the final cut, giving him some much-needed attention.', 'Born June 12, 1970 in New York City, New York and raised in Roslyn Heights, New York, Rick Hoffman graduated from The Wheatley School in Old Westbury, NY before attending the University of Arizona. After graduating from University of Arizona, Rick moved to Los Angeles to start an acting career. He landed his first role as a security guard in Teorija zavere (1997) . He was so nervous he flubbed his two lines. Fortunately, his misread got laughs from Julia Roberts , Richard Donner and the entire crew, and was included in the final cut, giving him some much-needed attention.\r\n\r\nAfter other small roles, he had his breakout role as the Freddie Sacker on Darren Star \'s Wall Street series The $treet (2000) which allowed him to quit his job waiting tables and move back to New York. He has had several memorable roles on series like Terry Loomis on the critically acclaimed Steven Bochco law drama Philly (2001) . These roles caught Variety magazine\'s attention who elected Rick one of Variety\'s 10 Actors to Watch. Then came the role of Jerry Best on The Bernie Mac Show (2001), and Patrick Van Dorn on the John Stamos comedy series Jake in Progress (2005).\r\n\r\nHe has had many supporting appearances in movies including Dan posle sutra (2004), Blood Work (2002), Hostel (2005), Mobilni (2004), and Lions Gate Films Osuđeni (2007). He suffered a near-death experience during the filming of the latter in Australia.\r\n\r\nHoffman presently resides in Los Angeles.');
INSERT INTO `actors` (`idActor`, `actorFirstName`, `actorLastName`, `actorSrcCover`, `actorSrcBig`, `actorSrcSmall`, `overview`, `biography`) VALUES
(21, 'Sarah', 'Rafferty', 'sarahraffertycover.jpg', 'sarahraffertybig.jpg', 'sarahraffertysmall.jpg', 'Sarah Rafferty\'s character Donna on USA network\'s hit show \"Suits\" is one of the most formidable minds at their law firm, Pearson Hardman. With her razor sharp wit and knowledge of all the firm\'s happenings, Donna is admired and feared by everyone there, and she\'s not afraid to wield that power when it suits her needs. The hit show is currently airing its eighth season.', 'While still in prep school, Sarah was bitten by the acting bug. When her drama teacher caught her cutting across his lawn in an effort not to be late for field hockey practice, he told her to skip practice and join the cast of \"Richard III,\" and thus began her adoration of acting.\r\n\r\nSarah decided to take her love for this craft and educate herself by double majoring in English and Theatre at Hamilton College, studying theatre abroad in London and Oxford during her junior year, and, after graduating magna cum laude from Hamilton, she went on to study at Yale Drama school. Her passion for learning about the arts was supported by her parents; her mother, the Chairwoman of the English Department at the Convent of the Sacred Heart in Greenwich, CT, and her father, an accomplished painter.\r\n\r\nHer education and natural talent clearly paid off. In addition to starring on USA Network\'s \"Suits,\", she has appeared in numerous TV series such as \"Law and Order,\" \"Six Feet Under,\" \"Brothers & Sisters,\" \"Samantha Who?,\" \"Without A Trace,\" \"CSI: Miami,\" and \"Bones,\" and feature films including: \"Four Single Fathers\" and \"Falling For Grace,\" along with countless professional stage productions like \"Gemini\" and \"As You Like It.\"\r\n\r\nIn addition to acting, Rafferty lends a hand to many causes including the Alzheimer\'s Association and The Brain Project. Rafferty hosted the annual Night at Sardi\'s event held in LA for two consecutive years, which benefited the support and research efforts of the Alzheimer\'s Association. Rafferty also takes on a role as an ambassador for the newly founded organization, The Brain Project. The goal of TBP is to raise funds through provoking works of art for Baycrest Health Sciences, a world leader in brain health and aging.\r\n\r\nSarah resides on both east and west coasts with her husband and two daughters and travels back and forth to Toronto for work.'),
(22, 'Patrick J.', 'Adams', 'patrickjadamscover.jpg', 'patrickjadamsbig.jpg', 'patrickjadamssmall.jpg', 'A \"master artist\" according to Variety and \"tour-de-force\" according to Backstage, Patrick J. Adams has starred as a fraudulent lawyer, a superhero, a veteran, a pro tennis player, and dozens of other memorable characters on stage and screen. For seven seasons Adams has charmed audiences worldwide, as Mike Ross in USA\'s hit drama, \"Suits,\" a role which garnered him a Screen Actors Guild Award nomination in the category of Outstanding Performance by a Male Actor in a Drama Series.', 'In 2016, Patrick starred opposite Troian Bellisario in the Old Globe Theatre\'s world premiere production of Anna Ziegler\'s \"The Last Match,\" earning critical praise for his performance as Tim, an incredibly talented but deeply flawed pro tennis player. He also stepped off the Waverider as \'Hourman\' in The CW/Berlanti/DC action series \"Legends of Tomorrow,\" on which he now recurs. Patrick will star in the rom-com digital series \"Pillow Talk,\" executive produced by \"Catastrophe\"\'s Sharon Horgan, and the indie feature comedy \"Room For Rent,\" alongside comedy luminaries Brett Gelman, Mark Little, Stephanie Weir & Mark McKinney.\r\n\r\nWith Zoe Saldana & Jason Isaacs, Adams starred in the 2014 television miniseries \"Rosemary\'s Baby\" directed by Agnieska Holland. Additional television credits include Michael Mann and David Milch\'s acclaimed series \"Luck\" opposite Dustin Hoffman and Michael Gambon, season two of the hit series \"Orphan Black\" opposite Tatiana Maslany, \"Lost,\" \"Friday Night Lights,\" \"Pretty Little Liars,\" \"N.C.I.S.,\" \"Lie To Me\" and \"Flash Forward.\"\r\n\r\nAdams co-starred in films including the hit comedy \"Old School,\" directed by Todd Phillips and 2009 Berlin Film Festival competitor \"Rage\" directed by internationally renowned filmmaker Sally Potter, in which he appeared alongside Judi Dench, Jude Law, Dianne Wiest and Steve Buscemi. Additionally, Adams starred in indie films such as, \"The Waterhole,\" 2009 Slamdance entry \"Weather Girl,\" \"6 Month Rule\" directed by Blayne Weaver and \"Car Dogs\" opposite Academy Award winning actress Octavia Spencer.\r\n\r\nAdams maintains strong ties to Southern California theatre. He produced and starred in writer Bill Cain\'s (\"House of Cards\") acclaimed production of \"9 Circles\" at the Bootleg Theatre in Los Angeles for which he was awarded a Backstage Garland Award for Best Performance in a Play and nominated for a 2012 Los Angeles Drama Critics Circle award for Lead Performance. He is a member of the Ojai Playwrights Conference, starring in new works by established and developing playwrights. Cain\'s \"Equivocation\" was developed at Ojai and Adams subsequently starred in the celebrated Geffen Playhouse production, which was honored with the 2010 Best Production at the LA Ovation Awards. He made his professional stage debut in the landmark, West Coast premiere of Edward Albee\'s \"The Goat, or Who Is Sylvia?\" at The Mark Taper Forum, which also took home Best Play at the Ovation Awards. Adams also produced and directed a hit revival of \"Marat/Sade,\" for which he accepted Best Production at the L.A. Weekly Theatre Awards.\r\n\r\nOriginally from Toronto, Adams is a graduate of the University of Southern California.'),
(23, 'Meghan', 'Markle', 'meghanmarklecover.jpg', 'meghanmarklebig.jpg', 'meghanmarklesmall.jpg', 'Meghan, Duchess of Sussex (born Rachel Meghan Markle; August 4, 1981), is an US-born member of the British royal family and a former film and television actress.', 'Meghan Markle was born and raised in Los Angeles, California, and is of mixed race heritage. During her studies at Northwestern University, she began playing small roles in television series and films. From 2011 to 2017, she played her best known role, Rachel Zane, on the legal drama series Suits. As an outspoken feminist, Markle has addressed issues of gender inequality, and her lifestyle website, The Tig, featured a column profiling influential women. Her humanitarian work in the 2010s saw her represent international charity organizations. She has also received recognition for her fashion and style, releasing a line of clothing in 2016.\r\n\r\nFrom 2011 until their divorce in 2013, Markle was married to actor and producer Trevor Engelson. In 2017, she announced her engagement to Prince Harry, grandson of Queen Elizabeth II, and moved to London. She consequently retired from acting, closed her social media accounts, and started undertaking public engagements on behalf of the British royal family. Following their wedding on May 19, 2018, Markle became known as the Duchess of Sussex.\r\n\r\nRachel Meghan Markle was born on August 4, 1981, in Los Angeles, California, at West Park Hospital in Canoga Park. Her mother, Doria Ragland, a social worker and yoga instructor, as of 2017 lives in View Park Windsor Hills, California. Markle has often described a very close friendship with her mother. Her father, Thomas Markle Sr., who lives in Rosarito, Mexico, is a retired television director of photography and lighting director, whose profession resulted in his young daughter often visiting the set of Married...with Children. Markle\'s parents divorced when she was six years old. She has two older paternal half siblings, Thomas Markle Jr. and Samantha Markle, from whom she is reportedly estranged.\r\n\r\nDescribing her heritage in a 2015 essay for Elle, Markle states that her \"dad is Caucasian and my mom is African American. I\'m half black and half white ... While my mixed heritage may have created a grey area surrounding my self identification, keeping me with a foot on both sides of the fence, I have come to embrace that. To say who I am, to share where I\'m from, to voice my pride in being a strong, confident mixed race woman.\"\r\n\r\nMarkle grew up in Hollywood. She was educated at private schools, beginning at age two at Hollywood Little Red Schoolhouse. At age 11, her successful campaign to get a company to change a national television commercial she viewed as sexist was profiled by Linda Ellerbee on Nick News. Markle attended Immaculate Heart High School, an all girl Catholic private school in Los Angeles, but was raised as a Protestant. She then attended Northwestern University, where she joined Kappa Kappa Gamma sorority, and participated in community service and charity projects. Markle graduated from Northwestern\'s School of Communication in 2003 with a bachelor\'s degree and a double major in theater and international studies. She also served an internship at the American embassy in Buenos Aires, Argentina, and studied for a semester in Madrid, Spain.\r\n\r\nMarkle worked as a freelance calligrapher to support herself between early acting jobs. Her first appearance on screen was a small role as a nurse in an episode of the daytime soap opera General Hospital. Early in her career, Markle had small guest roles on the television shows Century City (2004), The War at Home (2006), and CSI: NY (2006). She also took on several contract acting and modeling jobs, including a stint as a \"briefcase girl\" on the US game show Deal or No Deal. She appeared in Fox\'s series Fringe as Junior Agent Amy Jessup in the first two episodes of its second season. Markle had some difficulty getting roles early in her career. In 2015, she wrote: \"Being \'ethnically ambiguous\', as I was pegged in the industry, meant I could audition for virtually any role. Sadly, it didn\'t matter: I wasn\'t black enough for the black roles and I wasn\'t white enough for the white ones, leaving me somewhere in the middle as the ethnic chameleon who couldn\'t book a job.\"\r\n\r\nIn July 2011, Markle joined the cast of the USA Network show Suits, playing Rachel Zane. The character began as a paralegal and eventually became an attorney. She completed work on the seventh season in late 2017. According to a critique in The Irish Times, Markle deftly and actively repositioned her character from ingenue to moral conscience and gave viewers the unique portrayal of a daughter, whose African American father is in a position to help her career and advance her strong desire to break several racial and gender \"glass ceilings\". She appeared in two 2010 films, Get Him to the Greek and Remember Me, and one 2011 film, Horrible Bosses. She also appeared in episodes of Cuts; Love, Inc.; 90210; Knight Rider; Without a Trace; The League; and Castle.\r\n\r\nFrom 2014 to 2017, Markle was founder and editor in chief of lifestyle website The Tig. She derived the name from Tignanello red wine. One of The Tig\'s features was Tig Talk, a column that profiled women including Jessica Alba, Gail Simmons, Ella Woodward, Daphne Oz, Elizabeth Hurley, Lauren Bush Lauren, Ivanka Trump, Dianna Agron and Jessica Stam. In April 2017, she closed The Tig. Markle developed an adept and polished social media presence at the time of its closing, her Instagram account had 1.9 million followers. In January 2018, Markle deleted her social media accounts and, in a statement issued by Kensington Palace, thanked \"everyone who has followed her social media accounts over the years\".'),
(24, 'James', 'Spader', 'jamesspadercover.jpg', 'jamesspaderbig.jpg', 'jamesspadersmall.jpg', 'ames Todd Spader was born on February 7, 1960 in Boston, Massachusetts, the son of teachers Jean (Fraser) and Stoddard Greenwood \"Todd\" Spader. He attended Phillips Academy in Andover with director Peter Sellars; he dropped out in eleventh grade.', 'James Todd Spader was born on February 7, 1960 in Boston, Massachusetts, the son of teachers Jean (Fraser) and Stoddard Greenwood \"Todd\" Spader. He attended Phillips Academy in Andover with director Peter Sellars; he dropped out in eleventh grade. He bused tables, shoveled manure, and taught yoga before landing his first roles. Spader\'s first major film role was as Brooke Shields\' brother in the romance drama Endless Love (1981). Spader graduated from television movies to Brat Pack films, playing the scoundrel. In Seks, laži i video trake (1989), he played a sexual voyeur who complicates the lives of three Baton Rouge residents. This performance earned him the Best Actor award at the Cannes Film Festival and led to bigger and more varied roles. His best known role is the colorful attorney Alan Shore on the David E. Kelley television series Advokatura (1997) and its spin-off Bostonski advokati (2004).\r\n\r\nHe won 3 prime time Emmy Awards in the Best Actor, Drama category for playing the same character Alan Shore in two different television series \'The Practice\' and \'Boston Legal\' out of the 4 nominations he received for the same between the years 2004-2008. He also received a Golden Globe and several Screen Actor Guild Award Best Actor nominations for reprising this role.\r\n'),
(25, 'Megan', 'Boone', 'meganboonecover.jpg', 'meganboonebig.jpg', 'meganboonesmall.jpg', 'Megan Boone was born on April 29, 1983 in Petoskey, Michigan, USA as Megan Whitney Boone. She is an actress and director, known for Crna lista (2013), Leave Me Like You Found Me (2012) and Moj krvavi dan zaljubljenih (2009).', 'Although Megan is originally from Petoskey, Michigan, her parents moved the family to The Villages, Florida, a retirement community. Megan\'s grandfather, billionaire H. Gary Morse, was the property developer and her parents wanted to be closer to him and Meagan\'s grandmother. At last check, Megan\'s mother was working as the property\'s Director of Sales.\r\nHer ancestry is German and English, as well as smaller amounts of Scottish and Dutch, and one maternal great-great-grandfather who was a Hungarian-Jewish immigrant.\r\nIs in a relationship with Dan Estabrook and they became engaged in January 2016. They have a daughter together.\r\nGave birth to her 1st child at age 32, a daughter named Caroline Boone Estabrook on April 15, 2016 at 5:33 a.m. Child\'s father is her fiancé, Dan Estabrook.'),
(26, 'Diego', 'Klattenhoff', 'diegoklattenhoffcover.jpg', 'diegoklattenhoffbig.jpg', 'diegoklattenhoffsmall.jpg', 'Diego Klattenhoff (born 1979) is best known for his role as Mike Faber in the TV series Domovina (2011). He plays the role of a Marine captain whose best friend returns to the US after disappearing in Iraq seven years earlier. ', 'Diego Klattenhoff (born 1979) is best known for his role as Mike Faber in the TV series Domovina (2011). He plays the role of a Marine captain whose best friend returns to the US after disappearing in Iraq seven years earlier. Klattenhoff was born in Nova Scotia, Canada. As a kid, he always wanted to be a professional baseball player. But he chose to pursue an acting career after moving to Toronto at the age of 19. He started attending theater workshops for a number of years while working as a bartender. In his early career he studied with some of Canada\'s most respected acting coaches, including David Rotenberg, Bruce Clayton and Rae Ellen Bodie. He appeared in TV shows like Smolvil (2001) and Zvezdana kapija SG-1 (1997).'),
(27, 'Harry', 'Lennix', 'harrylennixcover.jpg', 'harrylennixbig.jpg', 'harrylennixsmall.jpg', 'Harry Lennix is an accomplished film, television, and stage actor. His recent credits include Warner Bros.\' \"Man of Steel\", The CW\'s \"Emily Owens, M.D.\", Fox\'s \"Dollhouse,\" HBO\'s \"Little Britain,\" as well as the critically acclaimed series \"24\" as Walid Al-Rezani.\r\n', 'Harry Joseph Lennix III was born November 16, 1964 in Chicago, Illinois, to Lillian C. (Vines), a laundress, and Harry Lennix, Jr., a machinist. He is of African-American and Louisiana Creole descent. He was not always certain he wanted to be an actor. An A student, he decided to act in his high school\'s play while he waited for the baseball season to begin. Lennix attended Northwestern University in Evanston, Illinois, where he was recognized in \"Who\'s Who Among American College Students.\" He majored in Acting and Direction at Northwestern and upon graduation stayed teaching in Chicago for a bit, before moving to New York, and from there to Los Angeles, California.\r\n\r\nHe has appeared in a veritable bevy of movies and guest-starring roles in many popular television shows such as Urgentni centar (1994), Diagnosis Murder (1993), Century City (2004), and Doktor Haus (2004).\r\n\r\nLennix made his Broadway debut in August Wilson\'s Tony nominated play, Radio Golf. He was seen on the big screen in Working Title\'s \"State of Play.\" In 2006, Lennix starred in the Golden Globe nominated ABC show \"Commander in Chief\" as Jim Gardner, the Chief of Staff. His other appearances include the Oscar winning film \"Ray,\" \"The Matrix: Reloaded,\" and \"The Matrix: Revolutions.\" Lennix received critical acclaim and a Golden Satellite Award as Aaron in Julie Taymor\'s \"Titus\" starring Anthony Hopkins. A host of other film credits include \"Across the Universe,\" \"Barbershop 2,\" and \"Love and Basketball.\" Lennix starred his as the legendary Adam Clayton Powell, Jr. in Showtime\'s \"Keep The Faith Baby,\" for which he won a Black Reel Award and was nominated for both an NAACP Image Award and a Golden Satellite Award. He continued to make his presence known with recurring roles on \"ER\" and \"Diagnosis Murder\" and other guest starring appearances on shows such as \"Law & Order: Los Angeles.\" Lennix has directed and appeared in stage productions across the country, including the Northlight Theater Company\'s production of Permanent Collection, at the Greenway Arts Alliance in Los Angeles. Under his directing consultation, it was remounted at Los Angeles\' Kirk Douglas Theater.\r\n\r\nHe directed the stage version of Robert Townsend\'s The Five Heartbeats, which received 3 NAACP Theater Award nominations and The Glass Menagerie for the Steppenwolf Theater Company. As a stage actor, Lennix was the first distinguished recipient of an Ollie Award for his portrayal of Malcolm X at the Goodman Theater in Chicago and two Joseph Jefferson Citations for his roles in Ma Rainey\'s Black Bottom and Caught in the Act. He also starred as King Hedley II, another play by August Wilson, at the Mark Taper Forum. In 2001, he was part of the first American company to be invited to the Royal Shakespeare Company in the production of Cymbeline. Lennix has also been extremely active in his native Chicago community where he was an English and music teacher before becoming an actor.\r\n\r\nHe founded Legacy Productions with renowned director Chuck Smith in 1989. The company is dedicated to promoting significant works about the African American experience. He is on the staff of the Goodman Theater Co. He also is active in various civic groups and is on the Advisory Council for his alma mater, Northwestern University.\r\n\r\nHe resides in Los Angeles. Harry has two older brothers and an older sister, and often returns to Chicago to visit his remaining family.');

-- --------------------------------------------------------

--
-- Table structure for table `actor_main_category_info`
--

CREATE TABLE `actor_main_category_info` (
  `idActorMainCatInfo` int(50) NOT NULL,
  `idMainCatInfo` int(50) NOT NULL,
  `idActor` int(50) NOT NULL,
  `actorRole` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actor_main_category_info`
--

INSERT INTO `actor_main_category_info` (`idActorMainCatInfo`, `idMainCatInfo`, `idActor`, `actorRole`) VALUES
(1, 1, 1, 'James Bond'),
(2, 1, 2, 'M'),
(3, 1, 3, 'Silva'),
(4, 1, 4, 'Gareth Mallory'),
(5, 5, 6, 'Jack'),
(6, 5, 7, 'Beech'),
(7, 5, 8, 'Julia'),
(8, 5, 10, 'Sykes'),
(9, 7, 11, 'Billy Hope'),
(10, 8, 12, 'Leonard Hofstadter'),
(11, 8, 13, 'Sheldon Cooper'),
(12, 8, 14, 'Penny'),
(13, 8, 15, 'Howard Wolowitz'),
(14, 8, 16, 'Raj Koothrappali'),
(15, 8, 17, 'Bernadette Rostenkowski'),
(16, 8, 18, 'Amy Farrah Fowler'),
(17, 9, 19, 'Harvey Specter'),
(18, 9, 20, 'Louis Litt'),
(19, 9, 21, 'Donna Paulsen'),
(20, 9, 22, 'Mike Ross'),
(21, 9, 23, 'Rachel Zane'),
(22, 11, 24, 'Raymond \'Red\' Reddington'),
(23, 11, 25, 'Elizabeth Keen'),
(24, 11, 26, 'Donald Ressler'),
(25, 11, 27, 'Harold Cooper');

-- --------------------------------------------------------

--
-- Table structure for table `agerestriction`
--

CREATE TABLE `agerestriction` (
  `idAgeRes` int(50) NOT NULL,
  `ageResName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agerestriction`
--

INSERT INTO `agerestriction` (`idAgeRes`, `ageResName`) VALUES
(1, 'G'),
(2, 'PG'),
(3, 'PG-13'),
(4, 'R'),
(5, 'NC-17');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `idAuthor` int(50) NOT NULL,
  `imePrezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kratakOpis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`idAuthor`, `imePrezime`, `kratakOpis`, `opis`) VALUES
(1, 'Milutin Velisic', 'Designer // Developer', 'I\'m Milutin, designer and developer, student of ICT college, learner and ready for new projects. I love coding and making coding fun and easier for both others and me. Im experienced with HTML, CSS, JavaScript, Bootstrap, PHP, C, C#, SQL, MYSQL, MSSQL as well.');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `idBlog` int(50) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `textShort` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `textLong` text COLLATE utf8_unicode_ci NOT NULL,
  `blogCoverPhoto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`idBlog`, `title`, `textShort`, `textLong`, `blogCoverPhoto`, `date`) VALUES
(1, 'Godzilla: King Of The Monsters Adds O’Shea Jackson Jr', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female cha', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female characters. After his documented frustrations with Wonder Woman, he\'s getting another chance at the DC Extended Universe and Warner Bros., closing in on a deal to write direct and produce a Batgirl movie.\r\n\r\nIt\'s a somewhat surprising, but welcome move, given that Whedon has taken a long break to write something original, but has now pivoted to focus on developing the Batgirl project. First appearing in 1967 in Gardner Fox and Carmine Infantino\'s story run The Million Dollar Debut Of Batgirl, she\'s the superhero alias of Barbara Gordon, daughter of Gotham City Police Commissioner James Gordon. So we can likely expect J.K. Simmons\' take on Gordon to appear along with other Bat-related characters.\r\n\r\nBased on Lissa Evans’ novel “Their Finest Hour and a Half” and directed by Lone Scherfig (“An Education”), the film is set in London during World War II when the British ministry was utilizing propaganda films to boost morale. Arterton plays Catrin Cole, a scriptwriter who is brought on to handle the women’s dialogue — commonly referred to as “the nausea.” The film, opening this week, features an outstanding ensemble, including Bill Nighy as a washed-up actor and Sam Claflin as Catrin’s fellow writer and sparring partner.\r\n\r\nArterton is next set to play Vita Sackville-West in Vita and Virginia about her relationship with Virginia Woolf. She spoke to Variety about working with female directors, remarkable women, and why she shies away from the term “strong female character.” \r\nI’m friends with the producer who I worked with on Byzantium and he sent it to me. I read the book as well, which is fantastic. You’re always looking for untold stories and many times they’re women’s stories. What surprised me is that it centers around a woman who’s really quite timid. I guess she’s allowed to be because all of the other characters.\r\n\r\n\r\nMan Down debuted simultaneously on digital platforms in the U.K., meaning it was never going to be a big earner in theaters. But no one expected only one ticket sale. As of Tuesday, the Reel Cinema in Burnley was still carrying Man Down, which also stars Gary Oldman, Jai Courtney and Kate Mara.\r\n\r\nIn the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanistan. The indie project, reuniting the star with A Guide to Recognizing Your Saints director Dito Montile, made its world premiere at the 2016 Venice Film Festival before making making a stop at the Toronto International Film Festival.', 'blogv21.jpg', '0000-00-00 00:00:00.000000'),
(2, 'Godzilla: King Of The Monsters Adds O’Shea Jackson Jr', 'In the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanista', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female characters. After his documented frustrations with Wonder Woman, he\'s getting another chance at the DC Extended Universe and Warner Bros., closing in on a deal to write direct and produce a Batgirl movie.\r\n\r\nIt\'s a somewhat surprising, but welcome move, given that Whedon has taken a long break to write something original, but has now pivoted to focus on developing the Batgirl project. First appearing in 1967 in Gardner Fox and Carmine Infantino\'s story run The Million Dollar Debut Of Batgirl, she\'s the superhero alias of Barbara Gordon, daughter of Gotham City Police Commissioner James Gordon. So we can likely expect J.K. Simmons\' take on Gordon to appear along with other Bat-related characters.\r\n\r\nBased on Lissa Evans’ novel “Their Finest Hour and a Half” and directed by Lone Scherfig (“An Education”), the film is set in London during World War II when the British ministry was utilizing propaganda films to boost morale. Arterton plays Catrin Cole, a scriptwriter who is brought on to handle the women’s dialogue — commonly referred to as “the nausea.” The film, opening this week, features an outstanding ensemble, including Bill Nighy as a washed-up actor and Sam Claflin as Catrin’s fellow writer and sparring partner.\r\n\r\nArterton is next set to play Vita Sackville-West in Vita and Virginia about her relationship with Virginia Woolf. She spoke to Variety about working with female directors, remarkable women, and why she shies away from the term “strong female character.” \r\nI’m friends with the producer who I worked with on Byzantium and he sent it to me. I read the book as well, which is fantastic. You’re always looking for untold stories and many times they’re women’s stories. What surprised me is that it centers around a woman who’s really quite timid. I guess she’s allowed to be because all of the other characters.\r\n\r\n\r\nMan Down debuted simultaneously on digital platforms in the U.K., meaning it was never going to be a big earner in theaters. But no one expected only one ticket sale. As of Tuesday, the Reel Cinema in Burnley was still carrying Man Down, which also stars Gary Oldman, Jai Courtney and Kate Mara.\r\n\r\nIn the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanistan. The indie project, reuniting the star with A Guide to Recognizing Your Saints director Dito Montile, made its world premiere at the 2016 Venice Film Festival before making making a stop at the Toronto International Film Festival.', 'blogv21.jpg', '0000-00-00 00:00:00.000000'),
(3, 'Godzilla: King Of The Monsters Adds O’Shea Jackson Jr', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female cha', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female characters. After his documented frustrations with Wonder Woman, he\'s getting another chance at the DC Extended Universe and Warner Bros., closing in on a deal to write direct and produce a Batgirl movie.\r\n\r\nIt\'s a somewhat surprising, but welcome move, given that Whedon has taken a long break to write something original, but has now pivoted to focus on developing the Batgirl project. First appearing in 1967 in Gardner Fox and Carmine Infantino\'s story run The Million Dollar Debut Of Batgirl, she\'s the superhero alias of Barbara Gordon, daughter of Gotham City Police Commissioner James Gordon. So we can likely expect J.K. Simmons\' take on Gordon to appear along with other Bat-related characters.\r\n\r\nBased on Lissa Evans’ novel “Their Finest Hour and a Half” and directed by Lone Scherfig (“An Education”), the film is set in London during World War II when the British ministry was utilizing propaganda films to boost morale. Arterton plays Catrin Cole, a scriptwriter who is brought on to handle the women’s dialogue — commonly referred to as “the nausea.” The film, opening this week, features an outstanding ensemble, including Bill Nighy as a washed-up actor and Sam Claflin as Catrin’s fellow writer and sparring partner.\r\n\r\nArterton is next set to play Vita Sackville-West in Vita and Virginia about her relationship with Virginia Woolf. She spoke to Variety about working with female directors, remarkable women, and why she shies away from the term “strong female character.” \r\nI’m friends with the producer who I worked with on Byzantium and he sent it to me. I read the book as well, which is fantastic. You’re always looking for untold stories and many times they’re women’s stories. What surprised me is that it centers around a woman who’s really quite timid. I guess she’s allowed to be because all of the other characters.\r\n\r\n\r\nMan Down debuted simultaneously on digital platforms in the U.K., meaning it was never going to be a big earner in theaters. But no one expected only one ticket sale. As of Tuesday, the Reel Cinema in Burnley was still carrying Man Down, which also stars Gary Oldman, Jai Courtney and Kate Mara.\r\n\r\nIn the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanistan. The indie project, reuniting the star with A Guide to Recognizing Your Saints director Dito Montile, made its world premiere at the 2016 Venice Film Festival before making making a stop at the Toronto International Film Festival.', 'blogv21.jpg', '0000-00-00 00:00:00.000000'),
(4, 'Godzilla: King Of The Monsters Adds O’Shea Jackson Jr', 'In the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanista', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female characters. After his documented frustrations with Wonder Woman, he\'s getting another chance at the DC Extended Universe and Warner Bros., closing in on a deal to write direct and produce a Batgirl movie.\r\n\r\nIt\'s a somewhat surprising, but welcome move, given that Whedon has taken a long break to write something original, but has now pivoted to focus on developing the Batgirl project. First appearing in 1967 in Gardner Fox and Carmine Infantino\'s story run The Million Dollar Debut Of Batgirl, she\'s the superhero alias of Barbara Gordon, daughter of Gotham City Police Commissioner James Gordon. So we can likely expect J.K. Simmons\' take on Gordon to appear along with other Bat-related characters.\r\n\r\nBased on Lissa Evans’ novel “Their Finest Hour and a Half” and directed by Lone Scherfig (“An Education”), the film is set in London during World War II when the British ministry was utilizing propaganda films to boost morale. Arterton plays Catrin Cole, a scriptwriter who is brought on to handle the women’s dialogue — commonly referred to as “the nausea.” The film, opening this week, features an outstanding ensemble, including Bill Nighy as a washed-up actor and Sam Claflin as Catrin’s fellow writer and sparring partner.\r\n\r\nArterton is next set to play Vita Sackville-West in Vita and Virginia about her relationship with Virginia Woolf. She spoke to Variety about working with female directors, remarkable women, and why she shies away from the term “strong female character.” \r\nI’m friends with the producer who I worked with on Byzantium and he sent it to me. I read the book as well, which is fantastic. You’re always looking for untold stories and many times they’re women’s stories. What surprised me is that it centers around a woman who’s really quite timid. I guess she’s allowed to be because all of the other characters.\r\n\r\n\r\nMan Down debuted simultaneously on digital platforms in the U.K., meaning it was never going to be a big earner in theaters. But no one expected only one ticket sale. As of Tuesday, the Reel Cinema in Burnley was still carrying Man Down, which also stars Gary Oldman, Jai Courtney and Kate Mara.\r\n\r\nIn the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanistan. The indie project, reuniting the star with A Guide to Recognizing Your Saints director Dito Montile, made its world premiere at the 2016 Venice Film Festival before making making a stop at the Toronto International Film Festival.', 'blogv21.jpg', '0000-00-00 00:00:00.000000'),
(5, 'Godzilla: King Of The Monsters Adds O’Shea Jackson Jr', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female cha', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female characters. After his documented frustrations with Wonder Woman, he\'s getting another chance at the DC Extended Universe and Warner Bros., closing in on a deal to write direct and produce a Batgirl movie.\r\n\r\nIt\'s a somewhat surprising, but welcome move, given that Whedon has taken a long break to write something original, but has now pivoted to focus on developing the Batgirl project. First appearing in 1967 in Gardner Fox and Carmine Infantino\'s story run The Million Dollar Debut Of Batgirl, she\'s the superhero alias of Barbara Gordon, daughter of Gotham City Police Commissioner James Gordon. So we can likely expect J.K. Simmons\' take on Gordon to appear along with other Bat-related characters.\r\n\r\nBased on Lissa Evans’ novel “Their Finest Hour and a Half” and directed by Lone Scherfig (“An Education”), the film is set in London during World War II when the British ministry was utilizing propaganda films to boost morale. Arterton plays Catrin Cole, a scriptwriter who is brought on to handle the women’s dialogue — commonly referred to as “the nausea.” The film, opening this week, features an outstanding ensemble, including Bill Nighy as a washed-up actor and Sam Claflin as Catrin’s fellow writer and sparring partner.\r\n\r\nArterton is next set to play Vita Sackville-West in Vita and Virginia about her relationship with Virginia Woolf. She spoke to Variety about working with female directors, remarkable women, and why she shies away from the term “strong female character.” \r\nI’m friends with the producer who I worked with on Byzantium and he sent it to me. I read the book as well, which is fantastic. You’re always looking for untold stories and many times they’re women’s stories. What surprised me is that it centers around a woman who’s really quite timid. I guess she’s allowed to be because all of the other characters.\r\n\r\n\r\nMan Down debuted simultaneously on digital platforms in the U.K., meaning it was never going to be a big earner in theaters. But no one expected only one ticket sale. As of Tuesday, the Reel Cinema in Burnley was still carrying Man Down, which also stars Gary Oldman, Jai Courtney and Kate Mara.\r\n\r\nIn the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanistan. The indie project, reuniting the star with A Guide to Recognizing Your Saints director Dito Montile, made its world premiere at the 2016 Venice Film Festival before making making a stop at the Toronto International Film Festival.', 'blogv21.jpg', '0000-00-00 00:00:00.000000'),
(6, 'Godzilla: King Of The Monsters Adds O’Shea Jackson Jr', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female cha', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female characters. After his documented frustrations with Wonder Woman, he\'s getting another chance at the DC Extended Universe and Warner Bros., closing in on a deal to write direct and produce a Batgirl movie.\r\n\r\nIt\'s a somewhat surprising, but welcome move, given that Whedon has taken a long break to write something original, but has now pivoted to focus on developing the Batgirl project. First appearing in 1967 in Gardner Fox and Carmine Infantino\'s story run The Million Dollar Debut Of Batgirl, she\'s the superhero alias of Barbara Gordon, daughter of Gotham City Police Commissioner James Gordon. So we can likely expect J.K. Simmons\' take on Gordon to appear along with other Bat-related characters.\r\n\r\nBased on Lissa Evans’ novel “Their Finest Hour and a Half” and directed by Lone Scherfig (“An Education”), the film is set in London during World War II when the British ministry was utilizing propaganda films to boost morale. Arterton plays Catrin Cole, a scriptwriter who is brought on to handle the women’s dialogue — commonly referred to as “the nausea.” The film, opening this week, features an outstanding ensemble, including Bill Nighy as a washed-up actor and Sam Claflin as Catrin’s fellow writer and sparring partner.\r\n\r\nArterton is next set to play Vita Sackville-West in Vita and Virginia about her relationship with Virginia Woolf. She spoke to Variety about working with female directors, remarkable women, and why she shies away from the term “strong female character.” \r\nI’m friends with the producer who I worked with on Byzantium and he sent it to me. I read the book as well, which is fantastic. You’re always looking for untold stories and many times they’re women’s stories. What surprised me is that it centers around a woman who’s really quite timid. I guess she’s allowed to be because all of the other characters.\r\n\r\n\r\nMan Down debuted simultaneously on digital platforms in the U.K., meaning it was never going to be a big earner in theaters. But no one expected only one ticket sale. As of Tuesday, the Reel Cinema in Burnley was still carrying Man Down, which also stars Gary Oldman, Jai Courtney and Kate Mara.\r\n\r\nIn the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanistan. The indie project, reuniting the star with A Guide to Recognizing Your Saints director Dito Montile, made its world premiere at the 2016 Venice Film Festival before making making a stop at the Toronto International Film Festival.', 'blogv21.jpg', '0000-00-00 00:00:00.000000'),
(7, 'Godzilla: King Of The Monsters Adds O’Shea Jackson Jr', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female cha', 'Joss Whedon has a little bit of a history with superhero movies, and for creating layered female characters. After his documented frustrations with Wonder Woman, he\'s getting another chance at the DC Extended Universe and Warner Bros., closing in on a deal to write direct and produce a Batgirl movie.\r\n\r\nIt\'s a somewhat surprising, but welcome move, given that Whedon has taken a long break to write something original, but has now pivoted to focus on developing the Batgirl project. First appearing in 1967 in Gardner Fox and Carmine Infantino\'s story run The Million Dollar Debut Of Batgirl, she\'s the superhero alias of Barbara Gordon, daughter of Gotham City Police Commissioner James Gordon. So we can likely expect J.K. Simmons\' take on Gordon to appear along with other Bat-related characters.\r\n\r\nBased on Lissa Evans’ novel “Their Finest Hour and a Half” and directed by Lone Scherfig (“An Education”), the film is set in London during World War II when the British ministry was utilizing propaganda films to boost morale. Arterton plays Catrin Cole, a scriptwriter who is brought on to handle the women’s dialogue — commonly referred to as “the nausea.” The film, opening this week, features an outstanding ensemble, including Bill Nighy as a washed-up actor and Sam Claflin as Catrin’s fellow writer and sparring partner.\r\n\r\nArterton is next set to play Vita Sackville-West in Vita and Virginia about her relationship with Virginia Woolf. She spoke to Variety about working with female directors, remarkable women, and why she shies away from the term “strong female character.” \r\nI’m friends with the producer who I worked with on Byzantium and he sent it to me. I read the book as well, which is fantastic. You’re always looking for untold stories and many times they’re women’s stories. What surprised me is that it centers around a woman who’s really quite timid. I guess she’s allowed to be because all of the other characters.\r\n\r\n\r\nMan Down debuted simultaneously on digital platforms in the U.K., meaning it was never going to be a big earner in theaters. But no one expected only one ticket sale. As of Tuesday, the Reel Cinema in Burnley was still carrying Man Down, which also stars Gary Oldman, Jai Courtney and Kate Mara.\r\n\r\nIn the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanistan. The indie project, reuniting the star with A Guide to Recognizing Your Saints director Dito Montile, made its world premiere at the 2016 Venice Film Festival before making making a stop at the Toronto International Film Festival.', 'blogv21.jpg', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idCat` int(50) NOT NULL,
  `categoryName` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idCat`, `categoryName`) VALUES
(1, 'POPULAR'),
(2, 'COMING SOON'),
(3, 'TOP RATED');

-- --------------------------------------------------------

--
-- Table structure for table `categories_main_category_info`
--

CREATE TABLE `categories_main_category_info` (
  `idCatMainCatInfo` int(50) NOT NULL,
  `idMainCatInfo` int(50) NOT NULL,
  `idCat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories_main_category_info`
--

INSERT INTO `categories_main_category_info` (`idCatMainCatInfo`, `idMainCatInfo`, `idCat`) VALUES
(1, 1, 1),
(2, 5, 3),
(3, 6, 3),
(4, 6, 2),
(5, 8, 1),
(6, 9, 3),
(7, 10, 1),
(8, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `idComment` int(50) NOT NULL,
  `commentText` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idUser` int(50) NOT NULL,
  `idBlog` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idComment`, `commentText`, `date`, `idUser`, `idBlog`) VALUES
(1, 'This is first comment', '2019-06-04 09:28:11', 1, 1),
(2, 'This is second comment', '2019-06-04 09:31:56', 1, 2),
(3, 'This is second comment', '2019-06-04 09:32:57', 1, 1),
(4, 'This is third comment', '2019-06-04 18:14:13', 2, 1),
(5, 'dafadsvaav', '2019-06-04 18:15:10', 2, 1),
(6, 'This is third comment', '2019-06-04 18:16:01', 2, 1),
(7, 'This is third comment', '2019-06-04 18:16:42', 2, 1),
(8, 'This is third comment', '2019-06-04 18:17:48', 2, 1),
(9, 'New comment', '2019-06-04 18:19:22', 2, 1),
(10, 'New comment', '2019-06-04 18:19:22', 2, 1),
(11, 'New new comment', '2019-06-04 18:21:39', 2, 1),
(12, 'New new comment', '2019-06-04 18:21:39', 2, 1),
(13, 'sfvadsfdvadvgadv', '2019-06-04 18:27:19', 2, 1),
(14, 'sfvadsfdvadvgadv', '2019-06-04 18:27:19', 2, 1),
(15, 'sfvadsfdvadvgadv', '2019-06-04 18:27:20', 2, 1),
(16, 'sfvadsfdvadvgadv', '2019-06-04 18:27:20', 2, 1),
(17, 'eeeeeeeeeeeeeeeeeeeee', '2019-06-04 18:28:19', 2, 1),
(18, 'eeeeeeeeeeeeeeeeeeeee', '2019-06-04 18:28:19', 2, 1),
(19, 'oooo', '2019-06-04 18:29:30', 2, 1),
(20, 'oooo', '2019-06-04 18:29:30', 2, 1),
(21, 'iiiiiiiiiiiiiiii', '2019-06-04 18:33:01', 2, 1),
(22, 'iiiiiiiiiiiiiiii', '2019-06-04 18:33:01', 2, 1),
(23, 'pppppppppppp', '2019-06-04 18:34:14', 2, 1),
(24, 'pppppppppppp', '2019-06-04 18:34:14', 2, 1),
(25, 'mmmmmmmmmm', '2019-06-04 18:35:44', 2, 1),
(26, 'mmmmmmmmmm', '2019-06-04 18:35:44', 2, 1),
(27, 'nestoo', '2019-06-04 18:38:33', 2, 2),
(28, 'nestoo', '2019-06-04 18:38:33', 2, 2),
(29, 'aaaaaaa', '2019-06-04 18:41:21', 2, 2),
(30, 'aaaaaaa', '2019-06-04 18:41:21', 2, 2),
(31, 'eeeeee', '2019-06-04 18:42:14', 2, 2),
(32, 'eeeeee', '2019-06-04 18:42:14', 2, 2),
(33, 'nnnnn', '2019-06-04 18:43:37', 2, 2),
(34, 'nnnnn', '2019-06-04 18:43:37', 2, 2),
(35, 'nesto nesto', '2019-06-05 12:18:38', 2, 3),
(36, 'nesto nesto', '2019-06-05 12:18:38', 2, 3),
(37, 'eeeeeeeeeeeee', '2019-06-05 12:19:28', 2, 3),
(38, 'eeeeeeeeeeeee', '2019-06-05 12:19:28', 2, 3),
(39, 'ooooooooooooooooo', '2019-06-05 12:20:31', 2, 3),
(40, 'ooooooooooooooooo', '2019-06-05 12:20:31', 2, 3),
(41, 'idemo', '2019-06-05 12:21:29', 2, 3),
(42, 'novi komentar', '2019-06-05 12:28:47', 2, 3),
(43, 'aaaaaaaaaaaaaaaaaaaa', '2019-06-05 12:29:45', 2, 3),
(44, 'ovo jeee', '2019-06-05 12:30:15', 2, 3),
(45, 'nesto', '2019-06-06 20:48:11', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `idDirector` int(50) NOT NULL,
  `directorFirstName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `directorLastName` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`idDirector`, `directorFirstName`, `directorLastName`) VALUES
(1, 'Sam', 'Mendes'),
(2, 'Joseph', 'Kosinski'),
(3, 'Antoine', 'Fuqua'),
(4, 'Christopher', 'Nolan'),
(5, 'Chuck', 'Lorre'),
(6, 'Bill', 'Prady'),
(7, 'Aaron', 'Korsh'),
(8, 'Jon', 'Bokenkamp');

-- --------------------------------------------------------

--
-- Table structure for table `director_main_category_info`
--

CREATE TABLE `director_main_category_info` (
  `idDirMainCatInfo` int(50) NOT NULL,
  `idMainCatInfo` int(50) NOT NULL,
  `idDirector` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `director_main_category_info`
--

INSERT INTO `director_main_category_info` (`idDirMainCatInfo`, `idMainCatInfo`, `idDirector`) VALUES
(1, 1, 1),
(2, 5, 2),
(3, 7, 3),
(4, 6, 4),
(5, 8, 5),
(6, 8, 6),
(7, 9, 7),
(8, 11, 8);

-- --------------------------------------------------------

--
-- Table structure for table `favourites_main_category_info`
--

CREATE TABLE `favourites_main_category_info` (
  `idFavMainCatInfo` int(50) NOT NULL,
  `idMainCatInfo` int(50) NOT NULL,
  `idUser` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favourites_main_category_info`
--

INSERT INTO `favourites_main_category_info` (`idFavMainCatInfo`, `idMainCatInfo`, `idUser`) VALUES
(1, 7, 2),
(2, 1, 2),
(8, 5, 2),
(10, 5, 1),
(11, 8, 1),
(12, 1, 1),
(13, 9, 2),
(14, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `idGenre` int(50) NOT NULL,
  `genreName` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`idGenre`, `genreName`) VALUES
(1, 'Action'),
(2, 'Sci-fi'),
(3, 'Comedy'),
(4, 'Adventure'),
(5, 'Thriller'),
(6, 'Drama'),
(7, 'Sport'),
(8, 'Romance'),
(9, 'Mistery'),
(10, 'Crime');

-- --------------------------------------------------------

--
-- Table structure for table `genre_main_category_info`
--

CREATE TABLE `genre_main_category_info` (
  `idGenreMainCatInfo` int(50) NOT NULL,
  `idMainCatInfo` int(50) NOT NULL,
  `idGenre` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genre_main_category_info`
--

INSERT INTO `genre_main_category_info` (`idGenreMainCatInfo`, `idMainCatInfo`, `idGenre`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 5),
(4, 5, 1),
(5, 5, 2),
(6, 5, 4),
(7, 7, 6),
(8, 7, 7),
(9, 8, 3),
(10, 8, 8),
(11, 9, 3),
(12, 9, 6),
(13, 11, 9),
(14, 11, 10),
(15, 11, 6),
(16, 6, 4),
(17, 6, 6),
(18, 6, 2),
(19, 10, 1),
(20, 10, 4),
(21, 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `idMainCat` int(50) NOT NULL,
  `mainCatName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`idMainCat`, `mainCatName`) VALUES
(1, 'movie'),
(2, 'serie');

-- --------------------------------------------------------

--
-- Table structure for table `main_category_info`
--

CREATE TABLE `main_category_info` (
  `idMainCatInfo` int(50) NOT NULL,
  `mainCatInfoName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mainCatInfoCoverPhoto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mainCatInfoBigPhoto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mainCatInfoMiniPhoto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mainCatInfoReleaseDate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mainCatInfoOverview` text COLLATE utf8_unicode_ci NOT NULL,
  `mainCatInfoRuntime` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mainCatInfoTrailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idAgeRes` int(50) NOT NULL,
  `idMainCat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `main_category_info`
--

INSERT INTO `main_category_info` (`idMainCatInfo`, `mainCatInfoName`, `mainCatInfoCoverPhoto`, `mainCatInfoBigPhoto`, `mainCatInfoMiniPhoto`, `mainCatInfoReleaseDate`, `mainCatInfoOverview`, `mainCatInfoRuntime`, `mainCatInfoTrailer`, `idAgeRes`, `idMainCat`) VALUES
(1, 'Skyfall', 'skyfallsmall.jpg', 'skyfallbig.jpg', 'skyfallmini.jpg', '31 October 2012', 'Bond\'s loyalty to M is tested when her past comes back to haunt her. When MI6 comes under attack, 007 must track down and destroy the threat, no matter how personal the cost.', '143', 'https://www.youtube.com/watch?v=6kw1UVovByw', 3, 1),
(5, 'Oblivion', 'oblivionsmall.jpg', 'oblivionbig.jpg', 'oblivionmini.jpg', '18 April 2013', 'A veteran assigned to extract Earth\'s remaining resources begins to question what he knows about his mission and himself.', '124', 'https://www.youtube.com/watch?v=XmIIgE7eSak', 3, 1),
(6, 'Interstellar', 'interstellarsmall.jpg', 'interstellarbig.jpg', 'interstellarmini.jpg', '6 November 2014', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', '169', 'https://www.youtube.com/watch?v=zSWdZVtXT7E', 3, 1),
(7, 'Southpaw', 'southpawsmall.jpg', 'southpawbig.jpg', 'southpawmini.jpg', '24 July 2015', 'A champion boxer fights to get his daughter back from child protective services as well as revive his professional career, after a fatal incident sends him on a rampant path of destruction.', '124', 'https://www.youtube.com/watch?v=Mh2ebPxhoLs', 4, 1),
(8, 'The Big Bang Theory', 'thebigbangtheorysmall.jpg', 'thebigbangtheorybig.jpg', 'thebigbangtheorymini.jpg', '1 May 2006', 'Leonard Hofstadter and Sheldon Cooper are both brilliant physicists working at Cal Tech in Pasadena, California. They are colleagues, best friends, and roommates, although in all capacities their relationship is always tested primarily by Sheldon\'s regime', '22', 'https://www.youtube.com/watch?v=PpKdAxc0pn4', 2, 2),
(9, 'Suits', 'suitssmall.jpg', 'suitsbig.jpg', 'suitsmini.jpg', '23 June 2011', 'While running from a drug deal gone bad, Mike Ross, a brilliant young college dropout, slips into a job interview with one of New York City\'s best legal closers, Harvey Specter. Tired of cookie-cutter law school grads, Harvey takes a gamble by hiring Mike', '44', 'https://www.youtube.com/watch?v=85z53bAebsI', 2, 2),
(10, 'Game of Thrones', 'gotsmall.jpg', 'gotbig.jpg', 'gotmini.jpg', '18 April 2011', 'In the mythical continent of Westeros, several powerful families fight for control of the Seven Kingdoms. As conflict erupts in the kingdoms of men, an ancient enemy rises once again to threaten them all. Meanwhile, the last heirs of a recently usurped dy', '57', 'https://www.youtube.com/watch?v=gcTkNV5Vg1E', 4, 2),
(11, 'The Blacklist', 'blacklistsmall.jpg', 'blacklistbig.jpg', 'blacklistmini.jpg', '23 September 2013', 'A highly articulate, erudite and intelligent businessman and mastermind, \"Red\" Reddington, has allegedly been on the \"10 Most Wanted List\" of various U.S. law enforcement agencies for over 20 years. The legend is that Red is as elusive as he is clever, co', '43', 'https://www.youtube.com/watch?v=XihA6GWIBdM', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `idNav` int(50) NOT NULL,
  `src` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`idNav`, `src`, `text`, `title`) VALUES
(1, 'index.php', 'home', 'home'),
(2, 'index.php?p=movies', 'movies', 'movies'),
(3, 'index.php?p=series', 'series', 'series'),
(4, 'index.php?p=celebrities', 'celebrities', 'celebrities'),
(5, 'index.php?p=blog', 'blog', 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `idPicture` int(50) NOT NULL,
  `pictureSrcBig` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pictureSrcSmall` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pictureAlt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentId` int(50) NOT NULL,
  `parentName` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE `producers` (
  `idProducer` int(50) NOT NULL,
  `producerFirstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `producerLastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`idProducer`, `producerFirstName`, `producerLastName`) VALUES
(1, 'Stan', 'Lee'),
(2, 'Joss', 'Whedon'),
(3, 'Neal', 'Purvis'),
(4, 'Robert', 'Wade'),
(5, 'Karl', 'Gajdusek'),
(6, 'Michael', 'Arndt'),
(7, 'Kurt', 'Sutter'),
(8, 'Chuck', 'Lorre'),
(9, 'Bill', 'Prady'),
(10, 'Aaron', 'Korsh'),
(11, 'Jon', 'Bokenkamp');

-- --------------------------------------------------------

--
-- Table structure for table `producer_main_category_info`
--

CREATE TABLE `producer_main_category_info` (
  `idProdMainCatInfo` int(50) NOT NULL,
  `idMainCatInfo` int(50) NOT NULL,
  `idProducer` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `producer_main_category_info`
--

INSERT INTO `producer_main_category_info` (`idProdMainCatInfo`, `idMainCatInfo`, `idProducer`) VALUES
(1, 1, 3),
(2, 1, 4),
(3, 5, 5),
(4, 5, 6),
(5, 6, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 8, 9),
(10, 9, 10),
(11, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `idRate` int(50) NOT NULL,
  `rate` int(10) NOT NULL,
  `idMainCatInfo` int(50) NOT NULL,
  `idUser` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `idReview` int(50) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `idMainCatInfo` int(50) NOT NULL,
  `idUser` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `idRole` int(50) NOT NULL,
  `roleName` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRole`, `roleName`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(50) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userPicture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idRole` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `username`, `password`, `email`, `userPicture`, `idRole`) VALUES
(1, 'milutin', '8813af270a1d1a71c7cd25ca86186bcb', 'milutin@gmail.com', '', 1),
(2, 'veljko', 'veljko', 'veljko', '', 2),
(5, 'danijela', 'fef213de0f55d86f2f6ee663f346bd5e', 'danijela@gmail.com', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`idActor`);

--
-- Indexes for table `actor_main_category_info`
--
ALTER TABLE `actor_main_category_info`
  ADD PRIMARY KEY (`idActorMainCatInfo`),
  ADD KEY `idMainCatInfo` (`idMainCatInfo`),
  ADD KEY `idActor` (`idActor`);

--
-- Indexes for table `agerestriction`
--
ALTER TABLE `agerestriction`
  ADD PRIMARY KEY (`idAgeRes`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`idAuthor`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idBlog`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCat`);

--
-- Indexes for table `categories_main_category_info`
--
ALTER TABLE `categories_main_category_info`
  ADD PRIMARY KEY (`idCatMainCatInfo`),
  ADD KEY `idMainCatInfo` (`idMainCatInfo`),
  ADD KEY `idCat` (`idCat`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `idBlog` (`idBlog`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`idDirector`);

--
-- Indexes for table `director_main_category_info`
--
ALTER TABLE `director_main_category_info`
  ADD PRIMARY KEY (`idDirMainCatInfo`),
  ADD KEY `idMainCatInfo` (`idMainCatInfo`),
  ADD KEY `idDirector` (`idDirector`);

--
-- Indexes for table `favourites_main_category_info`
--
ALTER TABLE `favourites_main_category_info`
  ADD PRIMARY KEY (`idFavMainCatInfo`),
  ADD KEY `idMainCatInfo` (`idMainCatInfo`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idUser_2` (`idUser`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`idGenre`);

--
-- Indexes for table `genre_main_category_info`
--
ALTER TABLE `genre_main_category_info`
  ADD PRIMARY KEY (`idGenreMainCatInfo`),
  ADD KEY `idMainCatInfo` (`idMainCatInfo`),
  ADD KEY `idGenre` (`idGenre`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`idMainCat`);

--
-- Indexes for table `main_category_info`
--
ALTER TABLE `main_category_info`
  ADD PRIMARY KEY (`idMainCatInfo`),
  ADD KEY `idAgeRes` (`idAgeRes`),
  ADD KEY `idMainCat` (`idMainCat`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`idNav`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`idPicture`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`idProducer`);

--
-- Indexes for table `producer_main_category_info`
--
ALTER TABLE `producer_main_category_info`
  ADD PRIMARY KEY (`idProdMainCatInfo`),
  ADD KEY `idMainCatInfo` (`idMainCatInfo`),
  ADD KEY `idProducer` (`idProducer`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`idRate`),
  ADD KEY `idMainCatInfo` (`idMainCatInfo`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`idReview`),
  ADD KEY `idMainCatInfo` (`idMainCatInfo`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `idRole` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `idActor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `actor_main_category_info`
--
ALTER TABLE `actor_main_category_info`
  MODIFY `idActorMainCatInfo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `agerestriction`
--
ALTER TABLE `agerestriction`
  MODIFY `idAgeRes` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `idAuthor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `idBlog` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories_main_category_info`
--
ALTER TABLE `categories_main_category_info`
  MODIFY `idCatMainCatInfo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `idComment` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `idDirector` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `director_main_category_info`
--
ALTER TABLE `director_main_category_info`
  MODIFY `idDirMainCatInfo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `favourites_main_category_info`
--
ALTER TABLE `favourites_main_category_info`
  MODIFY `idFavMainCatInfo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `idGenre` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `genre_main_category_info`
--
ALTER TABLE `genre_main_category_info`
  MODIFY `idGenreMainCatInfo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `idMainCat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_category_info`
--
ALTER TABLE `main_category_info`
  MODIFY `idMainCatInfo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `idNav` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `idPicture` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producers`
--
ALTER TABLE `producers`
  MODIFY `idProducer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `producer_main_category_info`
--
ALTER TABLE `producer_main_category_info`
  MODIFY `idProdMainCatInfo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `idRate` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `idReview` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_main_category_info`
--
ALTER TABLE `actor_main_category_info`
  ADD CONSTRAINT `actor_main_category_info_ibfk_1` FOREIGN KEY (`idMainCatInfo`) REFERENCES `main_category_info` (`idMainCatInfo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actor_main_category_info_ibfk_2` FOREIGN KEY (`idActor`) REFERENCES `actors` (`idActor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories_main_category_info`
--
ALTER TABLE `categories_main_category_info`
  ADD CONSTRAINT `categories_main_category_info_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categories` (`idCat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_main_category_info_ibfk_2` FOREIGN KEY (`idMainCatInfo`) REFERENCES `main_category_info` (`idMainCatInfo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`idBlog`) REFERENCES `blog` (`idBlog`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `director_main_category_info`
--
ALTER TABLE `director_main_category_info`
  ADD CONSTRAINT `director_main_category_info_ibfk_1` FOREIGN KEY (`idDirector`) REFERENCES `directors` (`idDirector`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `director_main_category_info_ibfk_2` FOREIGN KEY (`idMainCatInfo`) REFERENCES `main_category_info` (`idMainCatInfo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favourites_main_category_info`
--
ALTER TABLE `favourites_main_category_info`
  ADD CONSTRAINT `favourites_main_category_info_ibfk_1` FOREIGN KEY (`idMainCatInfo`) REFERENCES `main_category_info` (`idMainCatInfo`),
  ADD CONSTRAINT `favourites_main_category_info_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `genre_main_category_info`
--
ALTER TABLE `genre_main_category_info`
  ADD CONSTRAINT `genre_main_category_info_ibfk_1` FOREIGN KEY (`idMainCatInfo`) REFERENCES `main_category_info` (`idMainCatInfo`),
  ADD CONSTRAINT `genre_main_category_info_ibfk_2` FOREIGN KEY (`idGenre`) REFERENCES `genres` (`idGenre`);

--
-- Constraints for table `main_category_info`
--
ALTER TABLE `main_category_info`
  ADD CONSTRAINT `main_category_info_ibfk_1` FOREIGN KEY (`idMainCat`) REFERENCES `main_category` (`idMainCat`),
  ADD CONSTRAINT `main_category_info_ibfk_2` FOREIGN KEY (`idAgeRes`) REFERENCES `agerestriction` (`idAgeRes`);

--
-- Constraints for table `producer_main_category_info`
--
ALTER TABLE `producer_main_category_info`
  ADD CONSTRAINT `producer_main_category_info_ibfk_1` FOREIGN KEY (`idMainCatInfo`) REFERENCES `main_category_info` (`idMainCatInfo`),
  ADD CONSTRAINT `producer_main_category_info_ibfk_2` FOREIGN KEY (`idProducer`) REFERENCES `producers` (`idProducer`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
