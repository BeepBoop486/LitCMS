-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2020 a las 01:22:11
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `litcms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `post_uploader` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_featured` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `post_name`, `post_content`, `post_uploader`, `post_thumb`, `post_date`, `post_tags`, `post_cat`, `is_featured`) VALUES
(1, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus facilisis turpis, et ultrices lectus facilisis ut. Suspendisse potenti. Nam lacinia elit at quam pulvinar facilisis. Aenean blandit feugiat interdum. Sed ut efficitur erat. Fusce convallis nisl et erat sollicitudin, eu lacinia mauris varius. Etiam iaculis placerat tempus. Quisque eleifend commodo consectetur. Morbi a metus semper, commodo ante vitae, ullamcorper mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque commodo lorem convallis, lobortis arcu vitae, tempus libero. Morbi eu felis aliquet, dictum quam at, vehicula tortor.\r\n\r\nMaecenas ultricies sapien blandit porta fermentum. Nulla nec eros eget risus egestas cursus. Nunc bibendum tincidunt urna ut accumsan. Sed id congue elit. Nullam auctor justo urna, vitae aliquet metus dapibus nec. Duis facilisis purus vitae massa vestibulum, id rutrum felis fermentum. Integer in erat tellus. In id risus at dolor efficitur lacinia. Phasellus dapibus nibh id lorem sollicitudin ornare.\r\n\r\nPhasellus in condimentum dolor. Maecenas luctus fermentum eleifend. Phasellus scelerisque nibh tortor, et luctus libero lacinia non. Praesent ornare nulla non libero rhoncus, a ultrices nunc consequat. Nulla sed ullamcorper velit, at porta tellus. In congue nunc lacus, a posuere risus accumsan ut. Nulla at mi nunc.\r\n\r\nNulla scelerisque sem leo, vel ultrices quam fermentum eget. Donec tristique augue vel turpis tempor, vel rutrum ex rhoncus. Nullam rutrum mi congue vestibulum ultricies. Curabitur a aliquam arcu, vitae blandit metus. Sed id maximus diam. Mauris dapibus ac augue eget molestie. Pellentesque euismod justo sem, a blandit justo sollicitudin in. Aliquam non vulputate eros, id pretium est.\r\n\r\nQuisque dolor orci, tempor id enim dignissim, mollis pellentesque lacus. Vestibulum vitae euismod orci. Etiam porta elementum dui, facilisis lacinia dolor pellentesque sed. Ut in mauris eros. Vestibulum mi turpis, tincidunt tristique ultrices eu, condimentum in tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus augue eu urna euismod, eget commodo nunc venenatis. Suspendisse eu tincidunt risus, mattis tristique leo. Ut viverra tempus nisl vel sollicitudin. Vestibulum velit justo, dignissim ac turpis et, suscipit placerat sem. Curabitur erat arcu, eleifend non est in, facilisis condimentum odio. Etiam et enim volutpat, egestas dui at, tempus purus. Mauris tortor mauris, egestas ac commodo nec, tincidunt convallis sem. Nullam ac erat luctus, dapibus leo ut, aliquam leo. ', 'Admin', 'https://wallpaperaccess.com/full/685219.jpg', '19/02/12020', 'post, a basic post, first post ever, litcms', 'Example', 1),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum ac felis vitae elementum. Suspendisse cursus ex ut orci consectetur, ac tincidunt augue efficitur. Proin eu neque neque. Aenean interdum sodales felis ac hendrerit. Nunc ut enim vitae ante mollis tincidunt. Nam mauris diam, ultricies ut ullamcorper vitae, hendrerit aliquet urna. Mauris ligula nisi, iaculis et sagittis in, accumsan volutpat est. Mauris sollicitudin tortor cursus neque rutrum, sed sodales augue euismod. Maecenas eu efficitur massa. Suspendisse varius euismod nibh. Vestibulum blandit lobortis venenatis. Donec pulvinar, ante eget pretium tincidunt, orci augue ornare quam, ut porta dolor ex et diam.\r\n\r\nSed tincidunt lectus sit amet mattis lacinia. Vivamus mattis a turpis sed sagittis. In quis metus ligula. Nam quis massa eget risus gravida tincidunt eget eget sem. Praesent vel sapien vitae nibh tincidunt semper. Nullam vitae cursus mi. Proin eget dictum nunc, sed tempus massa. Vestibulum quis ipsum ac quam dignissim bibendum. Fusce sed pulvinar nunc. Quisque a elit non magna pharetra facilisis id quis ligula. Vivamus id nulla lacus. Suspendisse ultricies, sapien ut bibendum placerat, velit nulla tempus tortor, id dictum velit erat pharetra elit. Nullam vel mauris lectus. Curabitur at erat auctor, cursus est eget, fermentum urna. Etiam pellentesque eros et odio fermentum, eu vulputate ex rhoncus. Mauris sed sagittis lectus.\r\n\r\nVestibulum tristique est sit amet orci iaculis luctus. Vestibulum mollis sem non lorem vehicula porttitor. Donec ac dui volutpat, convallis arcu sed, consequat ligula. Proin fermentum turpis nec purus consectetur, sit amet egestas lorem laoreet. In facilisis ante vel metus porta, ut sodales ex feugiat. Nunc dapibus mollis elit vitae cursus. Integer massa tortor, gravida sit amet ultricies non, fringilla vel ante.\r\n\r\nDonec condimentum vehicula orci nec hendrerit. Nulla facilisi. Mauris erat augue, tincidunt id enim quis, bibendum sagittis metus. Nulla facilisi. Donec sed congue augue. Mauris tempor sapien congue nisl facilisis, rhoncus commodo nibh sagittis. Aliquam quis finibus neque. Suspendisse dignissim vestibulum lobortis. Suspendisse metus turpis, facilisis sed finibus condimentum, hendrerit sit amet magna. Vestibulum convallis, mauris id molestie ultricies, sapien massa varius libero, sed gravida nunc ligula pellentesque mi. Nunc ac elit convallis, cursus purus non, viverra libero. Sed massa enim, interdum pulvinar gravida eu, facilisis vel justo. In euismod purus ac metus sollicitudin blandit. Curabitur finibus vitae urna vitae convallis. Phasellus tempus velit sit amet venenatis facilisis.\r\n\r\nInteger tempus, dolor in consequat aliquam, eros nunc tempus ipsum, in vestibulum odio nibh et leo. Praesent massa dui, suscipit ut odio sit amet, facilisis venenatis mi. Phasellus elementum efficitur ipsum. Curabitur quis tortor rhoncus, vehicula velit in, placerat magna. Praesent vel accumsan risus. Maecenas gravida euismod semper. Curabitur sodales dui vel tellus laoreet, eu pharetra nunc tristique. Curabitur iaculis tempor elit. Donec ac quam efficitur, semper elit at, tempus tortor. Nunc ac turpis est. Proin malesuada tellus varius massa porttitor, ut finibus velit faucibus.\r\n\r\nSed dictum diam et libero iaculis, quis hendrerit mauris viverra. In ut ultricies ante, ac ornare turpis. Duis ac risus hendrerit, imperdiet orci quis, tempor dolor. Curabitur pellentesque vestibulum aliquam. Sed dictum pretium tellus vel ornare. Duis felis sem, ornare ac commodo eu, interdum nec risus. Praesent cursus elit orci, at posuere mi vulputate vel. Morbi vestibulum nisl a ultricies varius. Ut dignissim consequat neque, sed eleifend quam faucibus nec. Integer dapibus congue scelerisque. Nunc mollis diam ut magna consequat rhoncus. Morbi a hendrerit lorem. Etiam eu ex augue. Mauris pharetra euismod justo ac mattis. Curabitur nec lacus nec dui malesuada auctor. Maecenas arcu lectus, sodales vel ex ut, pharetra placerat nisi.\r\n\r\nMaecenas congue nisi libero. Nullam finibus, justo in blandit mattis, nulla urna vulputate mi, eget finibus diam nulla sed ex. Curabitur pharetra sapien a libero laoreet sagittis. Pellentesque id hendrerit ante. Aenean dapibus mi est, at tempus metus aliquam sit amet. Mauris vel tristique orci. Mauris quis ullamcorper nibh. Fusce sit amet erat massa. Sed pulvinar efficitur ante, et congue velit bibendum quis. Pellentesque nec sapien efficitur, consequat dui sit amet, congue ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ac consectetur enim. Vivamus iaculis justo nec ipsum porta, non ornare lacus auctor. Donec fringilla finibus tortor lobortis aliquet. Sed pulvinar nibh in felis faucibus, ac commodo nibh sagittis.\r\n\r\nCurabitur at neque ipsum. Etiam at tristique urna, eu maximus nibh. Nulla convallis non odio at mollis. Proin et aliquam lectus, vitae sodales magna. Nam quis finibus urna. Integer aliquam purus vel tellus feugiat pharetra. Suspendisse sit amet nunc gravida justo aliquam finibus. Sed quis nisl vitae nisi ornare pellentesque. Donec sit amet ex orci. Vivamus sed sem et dolor tristique lobortis sed a mauris. Sed maximus lacus dui, id dignissim eros ultrices id. Nullam eu dolor eu neque imperdiet pharetra quis ut quam. Aenean condimentum mattis mi id consequat. In varius augue erat, non imperdiet elit finibus eget.\r\n\r\nNunc scelerisque enim in libero efficitur semper. Quisque enim ante, venenatis vel purus sed, consectetur blandit nisl. Pellentesque sodales massa vitae risus fringilla bibendum. In justo sapien, efficitur id auctor ac, faucibus et nisl. Maecenas eget porta lectus. Nullam suscipit fermentum pharetra. Aliquam in ornare orci. Morbi purus tortor, tristique bibendum libero pulvinar, luctus fringilla magna. Pellentesque lacinia diam ipsum, elementum interdum purus consectetur nec. Aliquam erat volutpat. Vestibulum iaculis a ipsum vitae sagittis. Ut consectetur feugiat pulvinar. Aliquam scelerisque, libero in sollicitudin cursus, dui risus pulvinar tellus, sit amet faucibus ex dolor id tortor. Nam fermentum justo ipsum, ut viverra enim viverra id. Donec id ultrices mi. Aenean eu dapibus urna.\r\n\r\nPellentesque laoreet ligula suscipit nisl auctor tristique. Integer a lobortis nulla. Aenean faucibus dui non tincidunt tempus. Sed ac est ex. Nunc magna orci, tempor in auctor vel, convallis ut turpis. Sed id malesuada sem. Nulla ut sapien purus. Curabitur dapibus urna sapien, eget commodo ex pulvinar non. Pellentesque in nisl et leo bibendum sagittis id eu metus. Nulla facilisi. Praesent blandit eros nibh, ac rhoncus eros condimentum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc a tortor at nunc mollis finibus ut rhoncus augue. ', 'Admin', 'https://i.pinimg.com/originals/c6/22/46/c62246425d2c45d07ff2ad24ecd620cc.jpg', '19/02/12020', 'a post, another post, 2nd post', 'Music', 1),
(3, 'In hac habitasse platea dictumst', '\r\n\r\nIn hac habitasse platea dictumst. Sed sodales mauris quis vulputate dictum. Fusce finibus vehicula tortor, id rutrum neque commodo a. Nullam posuere magna placerat tellus maximus, nec mollis tellus iaculis. Praesent varius turpis vitae justo ultricies, ut egestas quam imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam cursus accumsan gravida. Curabitur sodales rutrum nunc non consequat. Integer porttitor vulputate libero, at rutrum ex lacinia a. Integer faucibus felis magna, in tincidunt lacus semper mattis. Integer metus magna, pharetra feugiat efficitur vitae, iaculis nec odio. Vestibulum aliquam viverra massa vel fermentum. Nulla varius lacus in ipsum pharetra, et bibendum mauris malesuada. Cras facilisis, sapien eu imperdiet accumsan, nunc augue ultrices lectus, ac faucibus risus metus at odio. Sed consectetur leo vitae fermentum varius. Curabitur orci purus, maximus at ultrices id, cursus vel nulla.\r\n\r\nAliquam purus est, cursus sed dui ac, aliquam posuere sapien. Nullam laoreet elementum risus eu iaculis. Aenean egestas, ipsum ut iaculis lobortis, diam nulla ultrices ipsum, eget fringilla orci lacus ut sem. Nam non tellus non enim ornare luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nisl libero, lacinia vel bibendum at, ornare a mi. In nec libero lacus. Praesent non vehicula nisi.\r\n\r\nUt fermentum tristique nisl, vitae mollis ante vestibulum ac. Pellentesque tempor eu justo nec varius. Aliquam convallis, elit elementum lobortis lacinia, nibh urna vestibulum urna, sit amet bibendum orci ante et nunc. Curabitur tortor libero, commodo ut nulla ac, consectetur tincidunt ante. Sed ac finibus augue, egestas molestie dolor. Nam feugiat, leo eu vehicula dictum, lacus magna commodo nisi, sit amet iaculis erat nisl vel augue. Quisque aliquam fermentum dolor non placerat. Vestibulum fermentum est a malesuada blandit. Aliquam vehicula purus ut hendrerit dignissim. Vestibulum sit amet urna mauris. Duis malesuada sem tellus, eget tincidunt mi mollis id. Sed sollicitudin odio nisl, eget ullamcorper sapien mattis eu. Praesent gravida id tellus vel consequat. Cras non massa neque. Quisque consectetur a libero consectetur sagittis. Vestibulum tristique accumsan dui nec malesuada.\r\n\r\nNullam eget neque porta, iaculis quam vitae, imperdiet mi. Nulla bibendum est et nulla placerat condimentum eget sed lacus. Proin ut lacinia arcu, sit amet finibus dui. Aliquam maximus quam sed maximus mollis. Etiam lobortis imperdiet justo, sed porttitor justo congue vitae. Morbi porta nunc turpis, ut egestas mauris lacinia ac. Donec quam ex, mollis quis massa malesuada, faucibus pellentesque mi. Sed varius, nisi a varius dictum, ex lacus fermentum magna, a hendrerit erat nibh vel eros. Morbi vel tempor neque. Praesent ac vestibulum tortor. Morbi tincidunt hendrerit purus vitae porta. Sed in magna nunc. Duis laoreet efficitur urna id pellentesque. Fusce ultrices mi et pellentesque tincidunt. Fusce eu enim magna. Cras gravida felis lacus, quis vulputate odio ornare quis.\r\n\r\nSuspendisse potenti. Aliquam erat volutpat. Fusce dignissim sapien in tellus fringilla, vitae pharetra turpis placerat. In vulputate nec turpis at varius. Duis ac tellus vel diam accumsan sollicitudin. Nulla lorem sem, molestie quis varius quis, maximus ut sapien. Praesent consequat maximus nibh, vitae gravida arcu semper et. Nulla venenatis dolor nec bibendum vestibulum. Curabitur tempus libero in congue sollicitudin. Etiam pretium viverra mollis. Cras tempor sollicitudin ipsum, nec blandit sem consequat sit amet. Aenean efficitur fermentum commodo. Sed eget luctus magna, quis vulputate mauris. Proin molestie, sapien vitae tincidunt pulvinar, ante metus eleifend sapien, nec maximus eros lorem ut lectus.\r\n\r\nNulla varius est justo, id consectetur quam posuere at. Integer laoreet sem vitae sapien feugiat cursus. Praesent a sapien tincidunt, feugiat ipsum sit amet, blandit urna. Sed elementum bibendum enim, nec consequat eros interdum vel. Integer placerat ut turpis in eleifend. Maecenas elementum laoreet lobortis. Quisque luctus lorem lorem. Aliquam erat volutpat.\r\n\r\nNulla ut risus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam dapibus venenatis urna ut convallis. Nam libero nisi, mollis sit amet ultricies id, blandit in dolor. Praesent egestas nisl a est euismod, eget ornare leo cursus. Integer faucibus dui at velit blandit, vel condimentum risus porta. Cras pellentesque iaculis nisi vel mollis. Integer a ligula leo. Maecenas gravida aliquam tellus id mollis. ', 'Admin', 'https://www.ecopetit.cat/wpic/mpic/82-823238_computer-wallpaper-nature-scenes-4k-nature-wallpaper-for.jpg', '19/02/12020', 'Another post, 3rd post, an example post', 'Gaming', 0),
(4, 'Life is strange', 'Life Is Strange is an episodic graphic adventure video game developed by Dontnod Entertainment and published by Square Enix for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, Xbox One, iOS and Android. The game was released in five episodes periodically throughout 2015. The game\'s plot focuses on Max Caulfield, an 18-year-old photography student who discovers that she has the ability to rewind time at any moment, leading her every choice to enact the butterfly effect. After having foreseen an approaching storm, Max must take on the responsibility to prevent it from destroying her town. The player\'s actions will adjust the narrative as it unfolds, and reshape it once allowed to travel back in time. Fetch quests and making environmental changes represent the forms of puzzle solving in addition to using branching choices for conversation.\r\n\r\nDevelopment of Life Is Strange began in April 2013. It was formed with an episodic format in mind, for reasons both financial and creative. The developers conducted field research on the setting by travelling to the Pacific Northwest, and subverted known archetypes to make the characters. Player feedback influenced the adjustments made to the episodes. Story and character arc serve as the central point in the game. During its release, Life Is Strange received generally favourable reviews commending the character development, rewind game mechanic and tackling of taboo subjects. Common criticisms included the slang that was used, poor lip-syncing in earlier episodes, and tonal inconsistencies in the story. It received over 75 Game of the Year awards and listings. It has sold over three million copies as of May 2017. A prequel, Life Is Strange: Before the Storm, was released in August 2017, and a sequel, Life Is Strange 2, in September 2018. ', 'Admin', 'https://images6.alphacoders.com/642/thumb-1920-642007.jpg', '24/02/12020', 'Life Is Strange, admin, helouda', 'Games', 1),
(5, 'Lacinia ante nullam praesent tempor in dis purus nibh nascetur', 'Lorem ipsum dolor sit amet consectetur adipiscing elit id morbi potenti dignissim tincidunt, lacinia ante nullam praesent tempor in dis purus nibh nascetur. Elementum natoque taciti tristique vel lacus ante senectus justo fringilla praesent primis, velit per semper luctus fames sem dignissim euismod curabitur mauris, tempus fermentum leo sodales potenti convallis aenean gravida dis ullamcorper. Auctor hendrerit dis vitae et dui arcu eros mollis, lobortis condimentum nostra a habitasse non sapien congue, tincidunt ac erat diam euismod tempor curae. Augue mauris dictumst justo cum mattis euismod parturient aliquam, ad habitasse magnis libero eu massa cursus, dignissim velit tempor porta dapibus per dui.\r\n\r\nNon lobortis ultricies netus sapien cubilia ornare est commodo facilisis, aptent hac ut justo id in torquent ridiculus sollicitudin ac, class quam gravida sem imperdiet venenatis mus eget. Rutrum velit mus hendrerit volutpat dictumst, parturient condimentum imperdiet. Consequat taciti porttitor natoque tempus sodales erat conubia et, habitant sociis venenatis nec arcu scelerisque feugiat lobortis, a metus vitae curabitur condimentum ligula libero. Pellentesque etiam felis morbi in eros netus habitasse lectus pharetra, per non vivamus fringilla ridiculus aliquet mi platea varius cras, iaculis augue ligula accumsan turpis phasellus vulputate habitant.\r\n\r\nVolutpat purus conubia nunc lectus donec interdum mauris orci malesuada, sapien taciti curae torquent sociosqu ad molestie nam laoreet, eu natoque libero rutrum platea sodales ultrices suspendisse. Dui nibh convallis per felis vulputate mattis non taciti, eget varius eu nullam eros hac feugiat ac, sapien conubia at pulvinar himenaeos elementum molestie. Massa volutpat quisque etiam bibendum morbi senectus diam, nibh convallis nec vehicula penatibus inceptos parturient nascetur, fusce praesent ante cras aptent arcu.\r\n\r\nClass sodales tempus hendrerit eu morbi semper nisl erat, sem imperdiet facilisis libero mollis eget. Nascetur nisi non porttitor pretium eros faucibus mi, iaculis diam orci penatibus molestie habitasse potenti, egestas vivamus himenaeos neque vehicula fames. Lacinia felis inceptos velit natoque sagittis dapibus suspendisse litora maecenas gravida laoreet suscipit nunc aenean ornare nisl, metus torquent ultrices curae tincidunt imperdiet ac mi varius habitasse posuere etiam eget semper enim. Arcu sodales in parturient consequat ante curabitur torquent ridiculus, ac erat cubilia dis eget iaculis nibh.\r\n\r\nOrnare fermentum cras hac leo sollicitudin tortor interdum felis faucibus, sem lobortis sodales viverra ridiculus habitant natoque nullam ultrices platea, cubilia dictumst consequat non orci fames sapien maecenas. Egestas facilisis sagittis pretium porttitor torquent accumsan pharetra placerat, curae nullam ut felis curabitur montes hac nibh commodo, taciti enim nisi fermentum auctor purus faucibus. Vel ante eros fringilla duis platea nunc condimentum tellus aliquet, justo placerat ac montes dictum vitae vestibulum eleifend maecenas primis, fames purus tristique eget turpis id vivamus rutrum.\r\n\r\nMauris purus vel accumsan cum quam tristique sapien, vulputate eget gravida aliquam quis. Malesuada hac aliquet est placerat sociis litora habitant tellus in taciti, vel ultrices primis aliquam sapien parturient nulla porta hendrerit vestibulum faucibus, nec nisi penatibus eros et sollicitudin curae tincidunt ultricies. Eget tortor nunc bibendum pretium eleifend cras nascetur eros leo ultrices potenti, sodales malesuada hendrerit sociis velit vitae nam id blandit.\r\n\r\nNisl ultrices et iaculis odio nascetur euismod porttitor magnis sed dapibus suspendisse, nam vel convallis fusce sapien per turpis nostra sollicitudin fringilla, ligula hac porta rhoncus phasellus platea lobortis placerat habitasse aliquet. Cubilia est odio proin senectus a rutrum morbi tortor, sagittis auctor ligula conubia scelerisque nulla pulvinar risus curabitur, sociosqu nam curae enim dapibus turpis duis. Diam commodo et parturient dictum ullamcorper nibh, sodales malesuada interdum morbi vestibulum, auctor accumsan ac nisl non. Est lobortis augue eros blandit fermentum aliquam nibh laoreet, bibendum hendrerit ultricies fames libero semper phasellus duis, congue maecenas sapien massa inceptos nec facilisi.\r\n\r\nSemper a himenaeos lacus sociis cubilia varius ante vitae in, mattis sociosqu volutpat egestas lacinia aenean lobortis nam consequat pellentesque, purus nec non morbi dui ultrices per dictum. Varius lobortis volutpat augue aenean tincidunt per, cursus libero enim tortor velit sem risus, erat lectus ultrices porta dictum. Ornare pharetra hendrerit nisi iaculis sodales habitasse sed phasellus sem curabitur nascetur, nullam duis ac mollis mi posuere tortor interdum sagittis parturient.\r\n\r\nMagna sed nascetur tortor placerat nam aliquet maecenas sem, volutpat habitasse condimentum netus sodales molestie risus fringilla mollis, nostra ac pretium donec facilisis penatibus orci. Leo vehicula himenaeos netus suspendisse fermentum vestibulum, congue suscipit aliquam cum consequat risus, ultrices montes iaculis pretium bibendum. Tellus vehicula cras laoreet potenti fermentum donec enim congue mi, curae ac porttitor sed dapibus fames mauris dictum, ante eros sociosqu sapien maecenas feugiat suspendisse taciti.\r\n\r\nVestibulum netus sociosqu urna vitae tempor gravida placerat varius risus curae dignissim, dapibus laoreet ante curabitur ultrices suscipit ac mattis egestas condimentum class, malesuada eros ligula mus id dictum congue imperdiet eget tellus. Suspendisse nullam orci nec netus lectus lacus a senectus, tristique fusce quis nisi maecenas consequat ridiculus praesent, duis dignissim posuere viverra condimentum porta donec.\r\n\r\nPer posuere massa ultricies penatibus duis rhoncus fusce vel sociosqu, ligula imperdiet litora at donec quam vestibulum parturient fames urna, aliquam proin ornare velit taciti blandit justo curae. Dis imperdiet viverra hendrerit cubilia primis sem, placerat praesent ornare vulputate eu at aliquam, euismod per eget accumsan maecenas. Mollis placerat felis vivamus aenean litora nisi non, elementum eu ut feugiat rhoncus curabitur erat, a dui molestie enim augue interdum. Orci arcu auctor hac primis nisl nibh ante, vivamus nunc ac blandit tortor viverra parturient, tristique non laoreet quam felis libero, iaculis ridiculus ultricies sociosqu quisque sagittis.\r\n\r\nMassa orci neque blandit in suscipit consequat cras phasellus, quis enim tempor tempus augue primis quisque fermentum purus, a nisi ullamcorper bibendum libero vel fames. Etiam parturient malesuada nascetur himenaeos lacinia nisi commodo dictumst proin luctus, eu inceptos nunc sodales pellentesque sagittis eros nullam pulvinar aliquam, facilisis quis integer sociis curabitur diam montes per metus. Augue magnis congue montes viverra nec suscipit malesuada semper per ac nunc phasellus, nisl volutpat dapibus fringilla nulla velit arcu dis integer blandit est.\r\n\r\nAccumsan lobortis ante convallis venenatis eros imperdiet habitasse hendrerit, pulvinar quisque hac netus cum inceptos faucibus, varius nisi tempor sociis donec eu velit. Vestibulum phasellus quis ridiculus praesent diam enim pretium in metus malesuada ultrices, volutpat risus per tristique aptent nec congue bibendum nullam. Egestas at placerat nec magna quisque ante laoreet, nullam porttitor orci vivamus suspendisse nulla, fusce eros turpis fermentum ultrices sed. Facilisi semper ullamcorper vehicula arcu vulputate ad sodales, sed litora bibendum scelerisque dictumst varius ultricies, vestibulum metus phasellus mauris cubilia gravida.\r\n\r\nTincidunt fermentum felis semper donec eleifend leo at fusce consequat nostra, dictum curae nunc inceptos integer phasellus pellentesque elementum morbi cursus convallis, nisi nulla tellus odio laoreet ridiculus aliquet molestie mi. Dignissim nascetur quam cum accumsan facilisi interdum aptent ridiculus sed, semper ad vehicula etiam primis integer pulvinar. Ultricies laoreet habitant aliquet sociosqu himenaeos tempor suspendisse sed nascetur turpis lectus condimentum gravida, mattis ante ac viverra sem leo pulvinar hendrerit erat augue consequat ad. Ante tincidunt penatibus mus et magnis volutpat imperdiet ullamcorper nulla, sem id mauris tempor eros bibendum posuere neque, sed lacus per egestas vehicula facilisi convallis nascetur.', '', 'https://images.unsplash.com/photo-1553061592-03b4b2df2f66?ixlib=rb-1.2.1&w=1000&q=80', '24/02/12020', 'Lorem ipsum, test, admin', 'Lifestyle', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `umail` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `uname`, `umail`, `upass`) VALUES
(2, 'Admin', 'gloominati88@gmail.com', '$2y$10$vqa6FGraD1wh.czxf41Pt.GkU.3W2GvS7SQwtVNuE.ag/tko7LA4a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
