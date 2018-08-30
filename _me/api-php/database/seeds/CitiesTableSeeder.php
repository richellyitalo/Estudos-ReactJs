<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
            /*!40101 SET NAMES utf8 */;
            /*!50503 SET NAMES utf8mb4 */;
            /*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
            /*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

            DELETE FROM `cities`;
            /*!40000 ALTER TABLE `cities` DISABLE KEYS */;
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (2663, 'RECIFE', '2611606', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (2959, 'FEIRA DE SANTANA', '2910800', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (3609, 'ITABIRA', '3131703', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (4278, 'NITEROI', '3303302', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (4281, 'RIO DE JANEIRO', '3304557', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (4636, 'SANTA BARBARA D OESTE', '3545803', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (4908, 'DIADEMA', '3513801', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (4915, 'SAO PAULO', '3550308', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (4942, 'NOVA LONDRINA', '4117107', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (5004, 'CAMPO MOURAO', '4104303', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (5134, 'QUATIGUA', '4120705', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (5314, 'SAO JOSE DOS PINHAIS', '4125506', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (5566, 'FLORIANOPOLIS', '4205407', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (6452, 'ABADIA DE GOIAS', '5200050', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (6453, 'APARECIDA DE GOIANIA', '5201405', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (6583, 'BRASILIA', '5300108', 53);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16693, 'NOVA BRASILANDIA D OESTE', '1100148', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16694, 'SAO MIGUEL DO GUAPORE', '1100320', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16695, 'ALVORADA D OESTE', '1100346', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16696, 'SERINGUEIRAS', '1101500', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16697, 'ALTA FLORESTA D OESTE', '1100015', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16698, 'CACOAL', '1100049', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16699, 'ESPIGAO D OESTE', '1100098', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16700, 'ROLIM DE MOURA', '1100288', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16701, 'SANTA LUZIA D OESTE', '1100296', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16702, 'ALTO ALEGRE DOS PARECIS', '1100379', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16703, 'NOVO HORIZONTE DO OESTE', '1100502', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16704, 'CASTANHEIRAS', '1100908', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16705, 'MINISTRO ANDREAZZA', '1101203', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16706, 'PIMENTA BUENO', '1100189', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16707, 'VILHENA', '1100304', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16708, 'CHUPINGUAIA', '1100924', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16709, 'PARECIS', '1101450', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16710, 'PRIMAVERA DE RONDONIA', '1101476', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16711, 'SAO FELIPE D OESTE', '1101484', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16712, 'CABIXI', '1100031', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16713, 'CEREJEIRAS', '1100056', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16714, 'COLORADO DO OESTE', '1100064', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16715, 'CORUMBIARA', '1100072', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16716, 'PIMENTEIRAS DO OESTE', '1101468', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16717, 'CRUZEIRO DO SUL', '1200203', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16718, 'MANCIO LIMA', '1200336', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16719, 'MARECHAL THAUMATURGO', '1200351', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16720, 'PORTO WALTER', '1200393', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16721, 'RODRIGUES ALVES', '1200427', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16722, 'FEIJO', '1200302', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16723, 'JORDAO', '1200328', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16724, 'TARAUACA', '1200609', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16725, 'MANOEL URBANO', '1200344', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16726, 'SANTA ROSA DO PURUS', '1200435', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16727, 'SENA MADUREIRA', '1200500', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16728, 'ACRELANDIA', '1200013', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16729, 'BUJARI', '1200138', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16730, 'CAPIXABA', '1200179', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16731, 'PLACIDO DE CASTRO', '1200385', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16732, 'RIO BRANCO', '1200401', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16733, 'SENADOR GUIOMARD', '1200450', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16734, 'PORTO ACRE', '1200807', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16735, 'ASSIS BRASIL', '1200054', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16736, 'BRASILEIA', '1200104', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16737, 'EPITACIOLANDIA', '1200252', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16738, 'XAPURI', '1200708', 12);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16739, 'BARCELOS', '1300409', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16740, 'NOVO AIRAO', '1303205', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16741, 'PORTO VELHO', '1100205', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16742, 'NOVA MAMORE', '1100338', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16743, 'BURITIS', '1100452', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16744, 'CAMPO NOVO DE RONDONIA', '1100700', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16745, 'CANDEIAS DO JAMARI', '1100809', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16746, 'CUJUBIM', '1100940', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16747, 'ITAPUA DO OESTE', '1101104', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16748, 'COSTA MARQUES', '1100080', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16749, 'GUAJARA-MIRIM', '1100106', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16750, 'SAO FRANCISCO DO GUAPORE', '1101492', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16751, 'ARIQUEMES', '1100023', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16752, 'MACHADINHO D OESTE', '1100130', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16753, 'RIO CRESPO', '1100262', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16754, 'ALTO PARAISO', '1100403', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16755, 'CACAULANDIA', '1100601', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16756, 'MONTE NEGRO', '1101401', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16757, 'VALE DO ANARI', '1101757', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16758, 'JARU', '1100114', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16759, 'JI-PARANA', '1100122', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16760, 'OURO PRETO DO OESTE', '1100155', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16761, 'PRESIDENTE MEDICI', '1100254', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16762, 'GOVERNADOR JORGE TEIXEIRA', '1101005', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16763, 'MIRANTE DA SERRA', '1101302', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16764, 'NOVA UNIAO', '1101435', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16765, 'TEIXEIROPOLIS', '1101559', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16766, 'THEOBROMA', '1101609', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16767, 'URUPA', '1101708', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16768, 'VALE DO PARAISO', '1101807', 11);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16769, 'SANTA ISABEL DO RIO NEGRO', '1303601', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16770, 'SAO GABRIEL DA CACHOEIRA', '1303809', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16771, 'JAPURA', '1302108', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16772, 'MARAA', '1302801', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16773, 'AMATURA', '1300060', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16774, 'ATALAIA DO NORTE', '1300201', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16775, 'BENJAMIN CONSTANT', '1300607', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16776, 'FONTE BOA', '1301605', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16777, 'JUTAI', '1302306', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16778, 'SANTO ANTONIO DO ICA', '1303700', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16779, 'SAO PAULO DE OLIVENCA', '1303908', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16780, 'TABATINGA', '1304062', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16781, 'TONANTINS', '1304237', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16782, 'CARAUARI', '1301001', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16783, 'EIRUNEPE', '1301407', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16784, 'ENVIRA', '1301506', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16785, 'GUAJARA', '1301654', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16786, 'IPIXUNA', '1301803', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16787, 'ITAMARATI', '1301951', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16788, 'JURUA', '1302207', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16789, 'ALVARAES', '1300029', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16790, 'TEFE', '1304203', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16791, 'UARINI', '1304260', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16792, 'ANAMA', '1300086', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16793, 'ANORI', '1300102', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16794, 'BERURI', '1300631', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16795, 'CAAPIRANGA', '1300839', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16796, 'COARI', '1301209', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16797, 'CODAJAS', '1301308', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16798, 'AUTAZES', '1300300', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16799, 'CAREIRO', '1301100', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16800, 'CAREIRO DA VARZEA', '1301159', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16801, 'IRANDUBA', '1301852', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16802, 'MANACAPURU', '1302504', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16803, 'MANAQUIRI', '1302553', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16804, 'MANAUS', '1302603', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16805, 'PRESIDENTE FIGUEIREDO', '1303536', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16806, 'RIO PRETO DA EVA', '1303569', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16807, 'ITACOATIARA', '1301902', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16808, 'ITAPIRANGA', '1302009', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16809, 'NOVA OLINDA DO NORTE', '1303106', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16810, 'SILVES', '1304005', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16811, 'URUCURITUBA', '1304401', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16812, 'BARREIRINHA', '1300508', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16813, 'BOA VISTA DO RAMOS', '1300680', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16814, 'MAUES', '1302900', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16815, 'NHAMUNDA', '1303007', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16816, 'PARINTINS', '1303403', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16817, 'SAO SEBASTIAO DO UATUMA', '1303957', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16818, 'URUCARA', '1304302', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16819, 'BOCA DO ACRE', '1300706', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16820, 'PAUINI', '1303502', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16821, 'CANUTAMA', '1300904', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16822, 'LABREA', '1302405', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16823, 'TAPAUA', '1304104', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16824, 'APUI', '1300144', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16825, 'BORBA', '1300805', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16826, 'HUMAITA', '1301704', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16827, 'MANICORE', '1302702', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16828, 'NOVO ARIPUANA', '1303304', 13);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16829, 'AMAJARI', '1400027', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16830, 'ALTO ALEGRE', '1400050', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16831, 'BOA VISTA', '1400100', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16832, 'PACARAIMA', '1400456', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16833, 'BONFIM', '1400159', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16834, 'CANTA', '1400175', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16835, 'NORMANDIA', '1400407', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16836, 'UIRAMUTA', '1400704', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16837, 'CARACARAI', '1400209', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16838, 'IRACEMA', '1400282', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16839, 'MUCAJAI', '1400308', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16840, 'CAROEBE', '1400233', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16841, 'RORAINOPOLIS', '1400472', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16842, 'SAO JOAO DA BALIZA', '1400506', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16843, 'SAO LUIZ', '1400605', 14);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16844, 'FARO', '1503002', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16845, 'JURUTI', '1503903', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16846, 'OBIDOS', '1505106', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16847, 'ORIXIMINA', '1505304', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16848, 'TERRA SANTA', '1507979', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16849, 'ALENQUER', '1500404', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16850, 'BELTERRA', '1501451', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16851, 'CURUA', '1502855', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16852, 'MONTE ALEGRE', '1504802', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16853, 'PLACAS', '1505650', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16854, 'PRAINHA', '1506005', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16855, 'SANTAREM', '1506807', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16856, 'ALMEIRIM', '1500503', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16857, 'PORTO DE MOZ', '1505908', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16858, 'BAGRE', '1501105', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16859, 'GURUPA', '1503101', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16860, 'MELGACO', '1504505', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16861, 'PORTEL', '1505809', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16862, 'AFUA', '1500305', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16863, 'ANAJAS', '1500701', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16864, 'BREVES', '1501808', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16865, 'CURRALINHO', '1502806', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16866, 'SAO SEBASTIAO DA BOA VISTA', '1507706', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16867, 'CACHOEIRA DO ARARI', '1502004', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16868, 'CHAVES', '1502509', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16869, 'MUANA', '1504901', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16870, 'PONTA DE PEDRAS', '1505700', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16871, 'SALVATERRA', '1506302', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16872, 'SANTA CRUZ DO ARARI', '1506401', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16873, 'SOURE', '1507904', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16874, 'ANANINDEUA', '1500800', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16875, 'BARCARENA', '1501303', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16876, 'BELEM', '1501402', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16877, 'BENEVIDES', '1501501', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16878, 'MARITUBA', '1504422', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16879, 'SANTA BARBARA DO PARA', '1506351', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16880, 'BUJARU', '1501907', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16881, 'CASTANHAL', '1502400', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16882, 'INHANGAPI', '1503408', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16883, 'SANTA ISABEL DO PARA', '1506500', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16884, 'SANTO ANTONIO DO TAUA', '1507003', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16885, 'COLARES', '1502608', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16886, 'CURUCA', '1502905', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16887, 'MAGALHAES BARATA', '1504109', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16888, 'MARACANA', '1504307', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16889, 'MARAPANIM', '1504406', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16890, 'SALINOPOLIS', '1506203', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16891, 'SAO CAETANO DE ODIVELAS', '1507102', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16892, 'SAO JOAO DA PONTA', '1507466', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16893, 'SAO JOAO DE PIRABAS', '1507474', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16894, 'TERRA ALTA', '1507961', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16895, 'VIGIA', '1508209', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16896, 'AUGUSTO CORREA', '1500909', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16897, 'BONITO', '1501600', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16898, 'BRAGANCA', '1501709', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16899, 'CAPANEMA', '1502202', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16900, 'IGARAPE-ACU', '1503200', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16901, 'NOVA TIMBOTEUA', '1505007', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16902, 'PEIXE-BOI', '1505601', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16903, 'PRIMAVERA', '1506104', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16904, 'QUATIPURU', '1506112', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16905, 'SANTA MARIA DO PARA', '1506609', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16906, 'SANTAREM NOVO', '1506906', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16907, 'SAO FRANCISCO DO PARA', '1507409', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16908, 'TRACUATEUA', '1508035', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16909, 'ABAETETUBA', '1500107', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16910, 'BAIAO', '1501204', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16911, 'CAMETA', '1502103', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16912, 'IGARAPE-MIRI', '1503309', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16913, 'LIMOEIRO DO AJURU', '1504000', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16914, 'MOCAJUBA', '1504604', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16915, 'OEIRAS DO PARA', '1505205', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16916, 'ACARA', '1500206', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16917, 'CONCORDIA DO PARA', '1502756', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16918, 'MOJU', '1504703', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16919, 'TAILANDIA', '1507953', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16920, 'TOME-ACU', '1508001', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16921, 'AURORA DO PARA', '1500958', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16922, 'CACHOEIRA DO PIRIA', '1501956', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16923, 'CAPITAO POCO', '1502301', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16924, 'GARRAFAO DO NORTE', '1503077', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16925, 'IPIXUNA DO PARA', '1503457', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16926, 'IRITUIA', '1503507', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16927, 'MAE DO RIO', '1504059', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16928, 'NOVA ESPERANCA DO PIRIA', '1504950', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16929, 'OUREM', '1505403', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16930, 'SANTA LUZIA DO PARA', '1506559', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16931, 'SAO DOMINGOS DO CAPIM', '1507201', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16932, 'SAO MIGUEL DO GUAMA', '1507607', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16933, 'VISEU', '1508308', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16934, 'AVEIRO', '1501006', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16935, 'ITAITUBA', '1503606', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16936, 'JACAREACANGA', '1503754', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16937, 'NOVO PROGRESSO', '1505031', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16938, 'RUROPOLIS', '1506195', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16939, 'TRAIRAO', '1508050', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16940, 'ALTAMIRA', '1500602', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16941, 'ANAPU', '1500859', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16942, 'BRASIL NOVO', '1501725', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16943, 'MEDICILANDIA', '1504455', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16944, 'PACAJA', '1505486', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16945, 'SENADOR JOSE PORFIRIO', '1507805', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16946, 'URUARA', '1508159', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16947, 'VITORIA DO XINGU', '1508357', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16948, 'BREU BRANCO', '1501782', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16949, 'ITUPIRANGA', '1503705', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16950, 'JACUNDA', '1503804', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16951, 'NOVA IPIXUNA', '1504976', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16952, 'NOVO REPARTIMENTO', '1505064', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16953, 'TUCURUI', '1508100', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16954, 'ABEL FIGUEIREDO', '1500131', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16955, 'BOM JESUS DO TOCANTINS', '1501576', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16956, 'DOM ELISEU', '1502939', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16957, 'GOIANESIA DO PARA', '1503093', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16958, 'PARAGOMINAS', '1505502', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16959, 'RONDON DO PARA', '1506187', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16960, 'ULIANOPOLIS', '1508126', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16961, 'BANNACH', '1501253', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16962, 'CUMARU DO NORTE', '1502764', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16963, 'OURILANDIA DO NORTE', '1505437', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16964, 'SAO FELIX DO XINGU', '1507300', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16965, 'TUCUMA', '1508084', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16966, 'AGUA AZUL DO NORTE', '1500347', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16967, 'CANAA DOS CARAJAS', '1502152', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16968, 'CURIONOPOLIS', '1502772', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16969, 'ELDORADO DOS CARAJAS', '1502954', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16970, 'PARAUAPEBAS', '1505536', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16971, 'BREJO GRANDE DO ARAGUAIA', '1501758', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16972, 'MARABA', '1504208', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16973, 'PALESTINA DO PARA', '1505494', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16974, 'SAO DOMINGOS DO ARAGUAIA', '1507151', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16975, 'SAO JOAO DO ARAGUAIA', '1507508', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16976, 'PAU D ARCO', '1505551', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16977, 'PICARRA', '1505635', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16978, 'REDENCAO', '1506138', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16979, 'RIO MARIA', '1506161', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16980, 'SAO GERALDO DO ARAGUAIA', '1507458', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16981, 'SAPUCAIA', '1507755', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16982, 'XINGUARA', '1508407', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16983, 'CONCEICAO DO ARAGUAIA', '1502707', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16984, 'FLORESTA DO ARAGUAIA', '1503044', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16985, 'SANTA MARIA DAS BARREIRAS', '1506583', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16986, 'SANTANA DO ARAGUAIA', '1506708', 15);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16987, 'CALCOENE', '1600204', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16988, 'OIAPOQUE', '1600501', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16989, 'AMAPA', '1600105', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16990, 'PRACUUBA', '1600550', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16991, 'TARTARUGALZINHO', '1600709', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16992, 'SERRA DO NAVIO', '1600055', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16993, 'PEDRA BRANCA DO AMAPARI', '1600154', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16994, 'CUTIAS', '1600212', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16995, 'FERREIRA GOMES', '1600238', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16996, 'ITAUBAL', '1600253', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16997, 'MACAPA', '1600303', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16998, 'PORTO GRANDE', '1600535', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (16999, 'SANTANA', '1600600', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17000, 'LARANJAL DO JARI', '1600279', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17001, 'MAZAGAO', '1600402', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17002, 'VITORIA DO JARI', '1600808', 16);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17003, 'AGUIARNOPOLIS', '1700301', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17004, 'ANANAS', '1701002', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17005, 'ANGICO', '1701051', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17006, 'ARAGUATINS', '1702208', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17007, 'AUGUSTINOPOLIS', '1702554', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17008, 'AXIXA DO TOCANTINS', '1702901', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17009, 'BURITI DO TOCANTINS', '1703800', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17010, 'CACHOEIRINHA', '1703826', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17011, 'CARRASCO BONITO', '1703891', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17012, 'DARCINOPOLIS', '1706506', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17013, 'ESPERANTINA', '1707405', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17014, 'ITAGUATINS', '1710706', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17015, 'LUZINOPOLIS', '1712454', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17016, 'MAURILANDIA DO TOCANTINS', '1712801', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17017, 'PALMEIRAS DO TOCANTINS', '1713809', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17018, 'NAZARE', '1714302', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17019, 'PRAIA NORTE', '1718303', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17020, 'RIACHINHO', '1718550', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17021, 'SAMPAIO', '1718808', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17022, 'SANTA TEREZINHA DO TOCANTINS', '1720002', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17023, 'SAO BENTO DO TOCANTINS', '1720101', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17024, 'SAO MIGUEL DO TOCANTINS', '1720200', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17025, 'SAO SEBASTIAO DO TOCANTINS', '1720309', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17026, 'SITIO NOVO DO TOCANTINS', '1720804', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17027, 'TOCANTINOPOLIS', '1721208', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17028, 'ARAGOMINAS', '1701309', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17029, 'ARAGUAINA', '1702109', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17030, 'ARAGUANA', '1702158', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17031, 'ARAPOEMA', '1702307', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17032, 'BABACULANDIA', '1703008', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17033, 'BANDEIRANTES DO TOCANTINS', '1703057', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17034, 'CARMOLANDIA', '1703883', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17035, 'COLINAS DO TOCANTINS', '1705508', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17036, 'FILADELFIA', '1707702', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17037, 'MURICILANDIA', '1713957', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17038, 'NOVA OLINDA', '1714880', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17039, 'PALMEIRANTE', '1715705', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17040, 'PAU D ARCO', '1716307', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17041, 'PIRAQUE', '1717206', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17042, 'SANTA FE DO ARAGUAIA', '1718865', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17043, 'WANDERLANDIA', '1722081', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17044, 'XAMBIOA', '1722107', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17045, 'ABREULANDIA', '1700251', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17046, 'ARAGUACEMA', '1701903', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17047, 'BARROLANDIA', '1703107', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17048, 'BERNARDO SAYAO', '1703206', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17049, 'BRASILANDIA DO TOCANTINS', '1703602', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17050, 'CASEARA', '1703909', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17051, 'COUTO DE MAGALHAES', '1706001', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17052, 'DIVINOPOLIS DO TOCANTINS', '1707108', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17053, 'DOIS IRMAOS DO TOCANTINS', '1707207', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17054, 'FORTALEZA DO TABOCAO', '1708254', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17055, 'GOIANORTE', '1708304', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17056, 'GUARAI', '1709302', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17057, 'ITAPORA DO TOCANTINS', '1711100', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17058, 'JUARINA', '1711803', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17059, 'MARIANOPOLIS DO TOCANTINS', '1712504', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17060, 'MIRACEMA DO TOCANTINS', '1713205', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17061, 'MIRANORTE', '1713304', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17062, 'MONTE SANTO DO TOCANTINS', '1713700', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17063, 'PEQUIZEIRO', '1716653', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17064, 'COLMEIA', '1716703', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17065, 'PRESIDENTE KENNEDY', '1718402', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17066, 'RIO DOS BOIS', '1718709', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17067, 'TUPIRAMA', '1721257', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17068, 'TUPIRATINS', '1721307', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17069, 'ARAGUACU', '1702000', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17070, 'CHAPADA DE AREIA', '1704600', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17071, 'CRISTALANDIA', '1706100', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17072, 'DUERE', '1707306', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17073, 'FATIMA', '1707553', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17074, 'FORMOSO DO ARAGUAIA', '1708205', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17075, 'LAGOA DA CONFUSAO', '1711902', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17076, 'NOVA ROSALANDIA', '1715002', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17077, 'OLIVEIRA DE FATIMA', '1715507', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17078, 'PARAISO DO TOCANTINS', '1716109', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17079, 'PIUM', '1717503', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17080, 'PUGMIL', '1718451', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17081, 'SANDOLANDIA', '1718840', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17082, 'ALIANCA DO TOCANTINS', '1700350', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17083, 'ALVORADA', '1700707', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17084, 'BREJINHO DE NAZARE', '1703701', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17085, 'CARIRI DO TOCANTINS', '1703867', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17086, 'CRIXAS DO TOCANTINS', '1706258', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17087, 'FIGUEIROPOLIS', '1707652', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17088, 'GURUPI', '1709500', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17089, 'JAU DO TOCANTINS', '1711506', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17090, 'PALMEIROPOLIS', '1715754', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17091, 'PEIXE', '1716604', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17092, 'SANTA RITA DO TOCANTINS', '1718899', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17093, 'SAO SALVADOR DO TOCANTINS', '1720259', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17094, 'SUCUPIRA', '1720853', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17095, 'TALISMA', '1720978', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17096, 'APARECIDA DO RIO NEGRO', '1701101', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17097, 'BOM JESUS DO TOCANTINS', '1703305', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17098, 'IPUEIRAS', '1709807', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17099, 'LAJEADO', '1712009', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17100, 'MONTE DO CARMO', '1713601', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17101, 'PEDRO AFONSO', '1716505', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17102, 'PORTO NACIONAL', '1718204', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17103, 'SANTA MARIA DO TOCANTINS', '1718881', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17104, 'SILVANOPOLIS', '1720655', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17105, 'PALMAS', '1721000', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17106, 'TOCANTINIA', '1721109', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17107, 'BARRA DO OURO', '1703073', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17108, 'CAMPOS LINDOS', '1703842', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17109, 'CENTENARIO', '1704105', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17110, 'GOIATINS', '1709005', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17111, 'ITACAJA', '1710508', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17112, 'ITAPIRATINS', '1710904', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17113, 'LAGOA DO TOCANTINS', '1711951', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17114, 'LIZARDA', '1712405', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17115, 'MATEIROS', '1712702', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17116, 'NOVO ACORDO', '1715101', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17117, 'PONTE ALTA DO TOCANTINS', '1717909', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17118, 'RECURSOLANDIA', '1718501', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17119, 'RIO SONO', '1718758', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17120, 'SANTA TEREZA DO TOCANTINS', '1719004', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17121, 'SAO FELIX DO TOCANTINS', '1720150', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17122, 'ALMAS', '1700400', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17123, 'ARRAIAS', '1702406', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17124, 'AURORA DO TOCANTINS', '1702703', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17125, 'CHAPADA DA NATIVIDADE', '1705102', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17126, 'COMBINADO', '1705557', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17127, 'CONCEICAO DO TOCANTINS', '1705607', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17128, 'DIANOPOLIS', '1707009', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17129, 'LAVANDEIRA', '1712157', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17130, 'NATIVIDADE', '1714203', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17131, 'NOVO ALEGRE', '1715150', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17132, 'NOVO JARDIM', '1715259', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17133, 'PARANA', '1716208', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17134, 'PINDORAMA DO TOCANTINS', '1717008', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17135, 'PONTE ALTA DO BOM JESUS', '1717800', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17136, 'PORTO ALEGRE DO TOCANTINS', '1718006', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17137, 'RIO DA CONCEICAO', '1718659', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17138, 'SANTA ROSA DO TOCANTINS', '1718907', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17139, 'SAO VALERIO DA NATIVIDADE', '1720499', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17140, 'TAGUATINGA', '1720903', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17141, 'TAIPAS DO TOCANTINS', '1720937', 17);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17142, 'ALCANTARA', '2100204', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17143, 'APICUM-ACU', '2100832', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17144, 'BACURI', '2101301', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17145, 'BACURITUBA', '2101350', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17146, 'BEQUIMAO', '2101905', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17147, 'CAJAPIO', '2102408', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17148, 'CEDRAL', '2103109', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17149, 'CENTRAL DO MARANHAO', '2103125', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17150, 'CURURUPU', '2103703', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17151, 'GUIMARAES', '2104909', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17152, 'MIRINZAL', '2106805', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17153, 'PORTO RICO DO MARANHAO', '2109056', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17154, 'SERRANO DO MARANHAO', '2111789', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17155, 'PACO DO LUMIAR', '2107506', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17156, 'RAPOSA', '2109452', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17157, 'SAO JOSE DE RIBAMAR', '2111201', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17158, 'SAO LUIS', '2111300', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17159, 'AXIXA', '2101103', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17160, 'BACABEIRA', '2101251', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17161, 'CACHOEIRA GRANDE', '2102374', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17162, 'ICATU', '2105104', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17163, 'MORROS', '2107100', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17164, 'PRESIDENTE JUSCELINO', '2109205', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17165, 'ROSARIO', '2109601', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17166, 'SANTA RITA', '2110203', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17167, 'BARREIRINHAS', '2101707', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17168, 'HUMBERTO DE CAMPOS', '2105005', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17169, 'PAULINO NEVES', '2108058', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17170, 'PRIMEIRA CRUZ', '2109403', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17171, 'SANTO AMARO DO MARANHAO', '2110278', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17172, 'TUTOIA', '2112506', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17173, 'ANAJATUBA', '2100709', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17174, 'ARARI', '2101004', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17175, 'BELA VISTA DO MARANHAO', '2101772', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17176, 'CAJARI', '2102507', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17177, 'CONCEICAO DO LAGO-ACU', '2103554', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17178, 'IGARAPE DO MEIO', '2105153', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17179, 'MATINHA', '2106508', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17180, 'MONCAO', '2106904', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17181, 'OLINDA NOVA DO MARANHAO', '2107456', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17182, 'PALMEIRANDIA', '2107605', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17183, 'PEDRO DO ROSARIO', '2108256', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17184, 'PENALVA', '2108306', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17185, 'PERI MIRIM', '2108405', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17186, 'PINHEIRO', '2108603', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17187, 'PRESIDENTE SARNEY', '2109270', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17188, 'SANTA HELENA', '2109809', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17189, 'SAO BENTO', '2110500', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17190, 'SAO JOAO BATISTA', '2111003', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17191, 'SAO VICENTE FERRER', '2111706', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17192, 'VIANA', '2112803', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17193, 'VITORIA DO MEARIM', '2112902', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17194, 'CANTANHEDE', '2102705', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17195, 'ITAPECURU MIRIM', '2105401', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17196, 'MATOES DO NORTE', '2106631', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17197, 'MIRANDA DO NORTE', '2106755', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17198, 'NINA RODRIGUES', '2107209', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17199, 'PIRAPEMAS', '2108801', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17200, 'PRESIDENTE VARGAS', '2109304', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17201, 'VARGEM GRANDE', '2112704', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17202, 'AMAPA DO MARANHAO', '2100550', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17203, 'BOA VISTA DO GURUPI', '2101970', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17204, 'CANDIDO MENDES', '2102606', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17205, 'CARUTAPERA', '2102903', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17206, 'CENTRO DO GUILHERME', '2103158', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17207, 'CENTRO NOVO DO MARANHAO', '2103174', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17208, 'GODOFREDO VIANA', '2104305', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17209, 'GOVERNADOR NUNES FREIRE', '2104677', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17210, 'JUNCO DO MARANHAO', '2105658', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17211, 'LUIS DOMINGUES', '2106201', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17212, 'MARACACUME', '2106326', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17213, 'MARANHAOZINHO', '2106375', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17214, 'TURIACU', '2112407', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17215, 'TURILANDIA', '2112456', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17216, 'ALTAMIRA DO MARANHAO', '2100402', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17217, 'ALTO ALEGRE DO PINDARE', '2100477', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17218, 'ARAGUANA', '2100873', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17219, 'BOM JARDIM', '2102002', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17220, 'BOM JESUS DAS SELVAS', '2102036', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17221, 'BREJO DE AREIA', '2102150', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17222, 'BURITICUPU', '2102325', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17223, 'GOVERNADOR NEWTON BELLO', '2104651', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17224, 'LAGO DA PEDRA', '2105708', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17225, 'LAGOA GRANDE DO MARANHAO', '2105963', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17226, 'MARAJA DO SENA', '2106359', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17227, 'NOVA OLINDA DO MARANHAO', '2107357', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17228, 'PAULO RAMOS', '2108108', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17229, 'PINDARE-MIRIM', '2108504', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17230, 'PRESIDENTE MEDICI', '2109239', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17231, 'SANTA INES', '2109908', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17232, 'SANTA LUZIA', '2110005', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17233, 'SANTA LUZIA DO PARUA', '2110039', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17234, 'SAO JOAO DO CARU', '2111029', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17235, 'TUFILANDIA', '2112274', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17236, 'VITORINO FREIRE', '2113009', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17237, 'ZE DOCA', '2114007', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17238, 'ACAILANDIA', '2100055', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17239, 'AMARANTE DO MARANHAO', '2100600', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17240, 'BURITIRANA', '2102358', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17241, 'CIDELANDIA', '2103257', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17242, 'DAVINOPOLIS', '2103752', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17243, 'GOVERNADOR EDISON LOBAO', '2104552', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17244, 'IMPERATRIZ', '2105302', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17245, 'ITINGA DO MARANHAO', '2105427', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17246, 'JOAO LISBOA', '2105500', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17247, 'LAJEADO NOVO', '2105989', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17248, 'MONTES ALTOS', '2107001', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17249, 'RIBAMAR FIQUENE', '2109551', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17250, 'SAO FRANCISCO DO BREJAO', '2110856', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17251, 'SAO PEDRO DA AGUA BRANCA', '2111532', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17252, 'SENADOR LA ROCQUE', '2111763', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17253, 'VILA NOVA DOS MARTIRIOS', '2112852', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17254, 'BACABAL', '2101202', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17255, 'BERNARDO DO MEARIM', '2101939', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17256, 'BOM LUGAR', '2102077', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17257, 'ESPERANTINOPOLIS', '2104008', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17258, 'IGARAPE GRANDE', '2105203', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17259, 'LAGO DO JUNCO', '2105807', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17260, 'LAGO VERDE', '2105906', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17261, 'LAGO DOS RODRIGUES', '2105948', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17262, 'LIMA CAMPOS', '2106003', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17263, 'OLHO D AGUA DAS CUNHAS', '2107407', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17264, 'PEDREIRAS', '2108207', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17265, 'PIO XII', '2108702', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17266, 'POCAO DE PEDRAS', '2108900', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17267, 'SANTO ANTONIO DOS LOPES', '2110302', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17268, 'SAO LUIS GONZAGA DO MARANHAO', '2111409', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17269, 'SAO MATEUS DO MARANHAO', '2111508', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17270, 'SAO RAIMUNDO DO DOCA BEZERRA', '2111631', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17271, 'SAO ROBERTO', '2111672', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17272, 'SATUBINHA', '2111722', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17273, 'TRIZIDELA DO VALE', '2112233', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17274, 'ARAME', '2100956', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17275, 'BARRA DO CORDA', '2101608', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17276, 'FERNANDO FALCAO', '2104081', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17277, 'FORMOSA DA SERRA NEGRA', '2104099', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17278, 'GRAJAU', '2104800', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17279, 'ITAIPAVA DO GRAJAU', '2105351', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17280, 'JENIPAPO DOS VIEIRAS', '2105476', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17281, 'JOSELANDIA', '2105609', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17282, 'SANTA FILOMENA DO MARANHAO', '2109759', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17283, 'SITIO NOVO', '2111805', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17284, 'TUNTUM', '2112308', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17285, 'DOM PEDRO', '2103802', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17286, 'FORTUNA', '2104206', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17287, 'GONCALVES DIAS', '2104404', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17288, 'GOVERNADOR ARCHER', '2104503', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17289, 'GOVERNADOR EUGENIO BARROS', '2104602', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17290, 'GOVERNADOR LUIZ ROCHA', '2104628', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17291, 'GRACA ARANHA', '2104701', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17292, 'PRESIDENTE DUTRA', '2109106', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17293, 'SAO DOMINGOS DO MARANHAO', '2110708', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17294, 'SAO JOSE DOS BASILIOS', '2111250', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17295, 'SENADOR ALEXANDRE COSTA', '2111748', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17296, 'AGUA DOCE DO MARANHAO', '2100154', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17297, 'ARAIOSES', '2100907', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17298, 'MAGALHAES DE ALMEIDA', '2106300', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17299, 'SANTA QUITERIA DO MARANHAO', '2110104', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17300, 'SANTANA DO MARANHAO', '2110237', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17301, 'SAO BERNARDO', '2110609', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17302, 'ANAPURUS', '2100808', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17303, 'BELAGUA', '2101731', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17304, 'BREJO', '2102101', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17305, 'BURITI', '2102200', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17306, 'CHAPADINHA', '2103208', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17307, 'MATA ROMA', '2106409', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17308, 'MILAGRES DO MARANHAO', '2106672', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17309, 'SAO BENEDITO DO RIO PRETO', '2110401', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17310, 'URBANO SANTOS', '2112605', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17311, 'ALTO ALEGRE DO MARANHAO', '2100436', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17312, 'CAPINZAL DO NORTE', '2102754', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17313, 'CODO', '2103307', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17314, 'COROATA', '2103604', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17315, 'PERITORO', '2108454', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17316, 'TIMBIRAS', '2112100', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17317, 'AFONSO CUNHA', '2100105', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17318, 'ALDEIAS ALTAS', '2100303', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17319, 'COELHO NETO', '2103406', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17320, 'DUQUE BACELAR', '2103901', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17321, 'BURITI BRAVO', '2102309', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17322, 'CAXIAS', '2103000', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17323, 'MATOES', '2106607', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17324, 'PARNARAMA', '2107803', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17325, 'SAO JOAO DO SOTER', '2111078', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17326, 'TIMON', '2112209', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17327, 'BARAO DE GRAJAU', '2101509', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17328, 'COLINAS', '2103505', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17329, 'JATOBA', '2105450', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17330, 'LAGOA DO MATO', '2105922', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17331, 'MIRADOR', '2106706', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17332, 'NOVA IORQUE', '2107308', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17333, 'PARAIBANO', '2107704', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17334, 'PASSAGEM FRANCA', '2107902', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17335, 'PASTOS BONS', '2108009', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17336, 'SAO FRANCISCO DO MARANHAO', '2110906', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17337, 'SAO JOAO DOS PATOS', '2111102', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17338, 'SUCUPIRA DO NORTE', '2111904', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17339, 'SUCUPIRA DO RIACHAO', '2111953', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17340, 'CAMPESTRE DO MARANHAO', '2102556', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17341, 'CAROLINA', '2102804', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17342, 'ESTREITO', '2104057', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17343, 'PORTO FRANCO', '2109007', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17344, 'SAO JOAO DO PARAISO', '2111052', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17345, 'SAO PEDRO DOS CRENTES', '2111573', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17346, 'ALTO PARNAIBA', '2100501', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17347, 'BALSAS', '2101400', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17348, 'FEIRA NOVA DO MARANHAO', '2104073', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17349, 'RIACHAO', '2109502', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17350, 'TASSO FRAGOSO', '2112001', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17351, 'BENEDITO LEITE', '2101806', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17352, 'FORTALEZA DOS NOGUEIRAS', '2104107', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17353, 'LORETO', '2106102', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17354, 'NOVA COLINAS', '2107258', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17355, 'SAMBAIBA', '2109700', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17356, 'SAO DOMINGOS DO AZEITAO', '2110658', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17357, 'SAO FELIX DE BALSAS', '2110807', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17358, 'SAO RAIMUNDO DAS MANGABEIRAS', '2111607', 21);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17359, 'BARRAS', '2201200', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17360, 'BATALHA', '2201507', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17361, 'BOA HORA', '2201770', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17362, 'BRASILEIRA', '2201960', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17363, 'CABECEIRAS DO PIAUI', '2202059', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17364, 'CAMPO LARGO DO PIAUI', '2202174', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17365, 'ESPERANTINA', '2203701', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17366, 'JOAQUIM PIRES', '2205409', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17367, 'JOCA MARQUES', '2205458', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17368, 'LUZILANDIA', '2205805', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17369, 'MADEIRO', '2205854', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17370, 'MATIAS OLIMPIO', '2206100', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17371, 'MIGUEL ALVES', '2206209', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17372, 'MORRO DO CHAPEU DO PIAUI', '2206670', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17373, 'NOSSA SENHORA DOS REMEDIOS', '2206803', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17374, 'PIRIPIRI', '2208403', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17375, 'PORTO', '2208502', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17376, 'SAO JOAO DO ARRAIAL', '2209971', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17377, 'BOM PRINCIPIO DO PIAUI', '2201919', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17378, 'BURITI DOS LOPES', '2202000', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17379, 'CAJUEIRO DA PRAIA', '2202083', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17380, 'CARAUBAS DO PIAUI', '2202539', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17381, 'CAXINGO', '2202653', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17382, 'COCAL', '2202703', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17383, 'COCAL DOS ALVES', '2202729', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17384, 'ILHA GRANDE', '2204659', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17385, 'LUIS CORREIA', '2205706', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17386, 'MURICI DOS PORTELAS', '2206696', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17387, 'PARNAIBA', '2207702', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17388, 'PIRACURUCA', '2208304', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17389, 'SAO JOAO DA FRONTEIRA', '2209872', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17390, 'SAO JOSE DO DIVINO', '2210052', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17391, 'ALTOS', '2200400', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17392, 'BENEDITINOS', '2201606', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17393, 'COIVARAS', '2202737', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17394, 'CURRALINHOS', '2203255', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17395, 'DEMERVAL LOBAO', '2203305', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17396, 'JOSE DE FREITAS', '2205508', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17397, 'LAGOA ALEGRE', '2205557', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17398, 'LAGOA DO PIAUI', '2205581', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17399, 'MIGUEL LEAO', '2206308', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17400, 'MONSENHOR GIL', '2206407', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17401, 'PAU D ARCO DO PIAUI', '2207793', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17402, 'TERESINA', '2211001', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17403, 'UNIAO', '2211100', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17404, 'ALTO LONGA', '2200301', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17405, 'ASSUNCAO DO PIAUI', '2201051', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17406, 'BOQUEIRAO DO PIAUI', '2201945', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17407, 'BURITI DOS MONTES', '2202026', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17408, 'CAMPO MAIOR', '2202208', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17409, 'CAPITAO DE CAMPOS', '2202406', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17410, 'CASTELO DO PIAUI', '2202604', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17411, 'COCAL DE TELHA', '2202711', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17412, 'DOMINGOS MOURAO', '2203420', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17413, 'JATOBA DO PIAUI', '2205276', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17414, 'JUAZEIRO DO PIAUI', '2205516', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17415, 'LAGOA DE SAO FRANCISCO', '2205573', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17416, 'MILTON BRANDAO', '2206357', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17417, 'NOSSA SENHORA DE NAZARE', '2206753', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17418, 'NOVO SANTO ANTONIO', '2206951', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17419, 'PEDRO II', '2207900', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17420, 'SAO JOAO DA SERRA', '2209906', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17421, 'SAO MIGUEL DO TAPUIO', '2210409', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17422, 'SIGEFREDO PACHECO', '2210656', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17423, 'AGRICOLANDIA', '2200103', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17424, 'AGUA BRANCA', '2200202', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17425, 'AMARANTE', '2200509', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17426, 'ANGICAL DO PIAUI', '2200608', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17427, 'ARRAIAL', '2201002', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17428, 'BARRO DURO', '2201408', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17429, 'FRANCISCO AYRES', '2204105', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17430, 'HUGO NAPOLEAO', '2204600', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17431, 'JARDIM DO MULATO', '2205250', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17432, 'LAGOINHA DO PIAUI', '2205540', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17433, 'OLHO D AGUA DO PIAUI', '2207108', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17434, 'PALMEIRAIS', '2207504', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17435, 'PASSAGEM FRANCA DO PIAUI', '2207751', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17436, 'REGENERACAO', '2208809', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17437, 'SANTO ANTONIO DOS MILAGRES', '2209450', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17438, 'SAO GONCALO DO PIAUI', '2209807', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17439, 'SAO PEDRO DO PIAUI', '2210508', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17440, 'AROAZES', '2200905', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17441, 'BARRA D ALCANTARA', '2201176', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17442, 'ELESBAO VELOSO', '2203503', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17443, 'FRANCINOPOLIS', '2204006', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17444, 'INHUMA', '2204709', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17445, 'LAGOA DO SITIO', '2205599', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17446, 'NOVO ORIENTE DO PIAUI', '2206902', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17447, 'PIMENTEIRAS', '2208106', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17448, 'PRATA DO PIAUI', '2208601', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17449, 'SANTA CRUZ DOS MILAGRES', '2209153', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17450, 'SAO FELIX DO PIAUI', '2209609', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17451, 'SAO MIGUEL DA BAIXA GRANDE', '2210383', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17452, 'VALENCA DO PIAUI', '2211308', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17453, 'VARZEA GRANDE', '2211407', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17454, 'BAIXA GRANDE DO RIBEIRO', '2201150', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17455, 'RIBEIRO GONCALVES', '2208908', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17456, 'SANTA FILOMENA', '2209203', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17457, 'URUCUI', '2211209', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17458, 'ANTONIO ALMEIDA', '2200806', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17459, 'BERTOLINIA', '2201705', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17460, 'COLONIA DO GURGUEIA', '2202752', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17461, 'ELISEU MARTINS', '2203602', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17462, 'LANDRI SALES', '2205607', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17463, 'MANOEL EMIDIO', '2205904', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17464, 'MARCOS PARENTE', '2206001', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17465, 'PORTO ALEGRE DO PIAUI', '2208551', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17466, 'SEBASTIAO LEAL', '2210631', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17467, 'CANAVIEIRA', '2202251', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17468, 'FLORES DO PIAUI', '2203800', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17469, 'FLORIANO', '2203909', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17470, 'GUADALUPE', '2204501', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17471, 'ITAUEIRA', '2205102', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17472, 'JERUMENHA', '2205300', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17473, 'NAZARE DO PIAUI', '2206704', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17474, 'PAVUSSU', '2207850', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17475, 'RIO GRANDE DO PIAUI', '2209005', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17476, 'SAO FRANCISCO DO PIAUI', '2209708', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17477, 'SAO JOSE DO PEIXE', '2210102', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17478, 'SAO MIGUEL DO FIDALGO', '2210391', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17479, 'ALVORADA DO GURGUEIA', '2200459', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17480, 'BARREIRAS DO PIAUI', '2201309', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17481, 'BOM JESUS', '2201903', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17482, 'CRISTINO CASTRO', '2203107', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17483, 'CURRAIS', '2203230', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17484, 'GILBUES', '2204402', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17485, 'MONTE ALEGRE DO PIAUI', '2206605', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17486, 'PALMEIRA DO PIAUI', '2207405', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17487, 'REDENCAO DO GURGUEIA', '2208700', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17488, 'SANTA LUZ', '2209302', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17489, 'SAO GONCALO DO GURGUEIA', '2209757', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17490, 'ANISIO DE ABREU', '2200707', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17491, 'BONFIM DO PIAUI', '2201929', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17492, 'BREJO DO PIAUI', '2201988', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17493, 'CANTO DO BURITI', '2202307', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17494, 'CARACOL', '2202505', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17495, 'CORONEL JOSE DIAS', '2202851', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17496, 'DIRCEU ARCOVERDE', '2203354', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17497, 'DOM INOCENCIO', '2203453', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17498, 'FARTURA DO PIAUI', '2203750', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17499, 'GUARIBAS', '2204550', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17500, 'JUREMA', '2205532', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17501, 'PAJEU DO PIAUI', '2207355', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17502, 'SAO BRAZ DO PIAUI', '2209559', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17503, 'SAO LOURENCO DO PIAUI', '2210359', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17504, 'SAO RAIMUNDO NONATO', '2210607', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17505, 'TAMBORIL DO PIAUI', '2210953', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17506, 'VARZEA BRANCA', '2211357', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17507, 'AVELINO LOPES', '2201101', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17508, 'CORRENTE', '2202901', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17509, 'CRISTALANDIA DO PIAUI', '2203008', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17510, 'CURIMATA', '2203206', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17511, 'JULIO BORGES', '2205524', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17512, 'MORRO CABECA NO TEMPO', '2206654', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17513, 'PARNAGUA', '2207603', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17514, 'RIACHO FRIO', '2208858', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17515, 'SEBASTIAO BARROS', '2210623', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17516, 'AROEIRAS DO ITAIM', '2200954', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17517, 'BOCAINA', '2201804', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17518, 'CAJAZEIRAS DO PIAUI', '2202075', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17519, 'COLONIA DO PIAUI', '2202778', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17520, 'DOM EXPEDITO LOPES', '2203404', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17521, 'GEMINIANO', '2204352', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17522, 'IPIRANGA DO PIAUI', '2204808', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17523, 'OEIRAS', '2207009', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17524, 'PAQUETA', '2207553', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17525, 'PICOS', '2208007', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17526, 'SANTA CRUZ DO PIAUI', '2209104', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17527, 'SANTANA DO PIAUI', '2209351', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17528, 'SANTA ROSA DO PIAUI', '2209377', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17529, 'SAO JOAO DA CANABRAVA', '2209856', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17530, 'SAO JOAO DA VARJOTA', '2209955', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17531, 'SAO JOSE DO PIAUI', '2210201', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17532, 'SAO LUIS DO PIAUI', '2210375', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17533, 'SUSSUAPARA', '2210938', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17534, 'TANQUE DO PIAUI', '2210979', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17535, 'WALL FERRAZ', '2211704', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17536, 'ALAGOINHA DO PIAUI', '2200251', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17537, 'ALEGRETE DO PIAUI', '2200277', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17538, 'FRANCISCO SANTOS', '2204204', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17539, 'MONSENHOR HIPOLITO', '2206506', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17540, 'PIO IX', '2208205', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17541, 'SANTO ANTONIO DE LISBOA', '2209401', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17542, 'SAO JULIAO', '2210300', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17543, 'ACAUA', '2200053', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17544, 'BELA VISTA DO PIAUI', '2201556', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17545, 'BELEM DO PIAUI', '2201572', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17546, 'BETANIA DO PIAUI', '2201739', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17547, 'CALDEIRAO GRANDE DO PIAUI', '2202091', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17548, 'CAMPINAS DO PIAUI', '2202109', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17549, 'CAMPO ALEGRE DO FIDALGO', '2202117', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17550, 'CAMPO GRANDE DO PIAUI', '2202133', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17551, 'CAPITAO GERVASIO OLIVEIRA', '2202455', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17552, 'CARIDADE DO PIAUI', '2202554', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17553, 'CONCEICAO DO CANINDE', '2202802', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17554, 'CURRAL NOVO DO PIAUI', '2203271', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17555, 'FLORESTA DO PIAUI', '2203859', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17556, 'FRANCISCO MACEDO', '2204154', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17557, 'FRONTEIRAS', '2204303', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17558, 'ISAIAS COELHO', '2204907', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17559, 'ITAINOPOLIS', '2205003', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17560, 'JACOBINA DO PIAUI', '2205151', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17561, 'JAICOS', '2205201', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17562, 'JOAO COSTA', '2205359', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17563, 'LAGOA DO BARRO DO PIAUI', '2205565', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17564, 'MARCOLANDIA', '2205953', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17565, 'MASSAPE DO PIAUI', '2206050', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17566, 'PADRE MARCOS', '2207207', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17567, 'PAES LANDIM', '2207306', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17568, 'PATOS DO PIAUI', '2207777', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17569, 'PAULISTANA', '2207801', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17570, 'PEDRO LAURENTINO', '2207934', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17571, 'NOVA SANTA RITA', '2207959', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17572, 'QUEIMADA NOVA', '2208650', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17573, 'RIBEIRA DO PIAUI', '2208874', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17574, 'SANTO INACIO DO PIAUI', '2209500', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17575, 'SAO FRANCISCO DE ASSIS DO PIAUI', '2209658', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17576, 'SAO JOAO DO PIAUI', '2210003', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17577, 'SIMOES', '2210706', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17578, 'SIMPLICIO MENDES', '2210805', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17579, 'SOCORRO DO PIAUI', '2210904', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17580, 'VERA MENDES', '2211506', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17581, 'VILA NOVA DO PIAUI', '2211605', 22);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17582, 'ACARAU', '2300200', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17583, 'BARROQUINHA', '2302057', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17584, 'BELA CRUZ', '2302305', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17585, 'CAMOCIM', '2302602', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17586, 'CHAVAL', '2303907', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17587, 'CRUZ', '2304251', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17588, 'GRANJA', '2304707', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17589, 'ITAREMA', '2306553', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17590, 'JIJOCA DE JERICOACOARA', '2307254', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17591, 'MARCO', '2307809', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17592, 'MARTINOPOLE', '2307908', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17593, 'MORRINHOS', '2308906', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17594, 'CARNAUBAL', '2303402', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17595, 'CROATA', '2304236', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17596, 'GUARACIABA DO NORTE', '2305001', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17597, 'IBIAPINA', '2305308', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17598, 'SAO BENEDITO', '2312304', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17599, 'TIANGUA', '2313401', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17600, 'UBAJARA', '2313609', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17601, 'VICOSA DO CEARA', '2314102', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17602, 'COREAU', '2304004', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17603, 'FRECHEIRINHA', '2304509', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17604, 'MORAUJO', '2308807', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17605, 'URUOCA', '2313906', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17606, 'ALCANTARAS', '2300507', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17607, 'MERUOCA', '2308203', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17608, 'CARIRE', '2303105', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17609, 'FORQUILHA', '2304350', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17610, 'GRACA', '2304657', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17611, 'GROAIRAS', '2304905', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17612, 'IRAUCUBA', '2306108', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17613, 'MASSAPE', '2308005', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17614, 'MIRAIMA', '2308377', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17615, 'MUCAMBO', '2309003', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17616, 'PACUJA', '2309904', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17617, 'SANTANA DO ACARAU', '2312007', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17618, 'SENADOR SA', '2312809', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17619, 'SOBRAL', '2312908', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17620, 'IPU', '2305803', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17621, 'IPUEIRAS', '2305902', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17622, 'PIRES FERREIRA', '2310951', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17623, 'PORANGA', '2311009', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17624, 'RERIUTABA', '2311702', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17625, 'VARJOTA', '2313955', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17626, 'CATUNDA', '2303659', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17627, 'HIDROLANDIA', '2305209', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17628, 'SANTA QUITERIA', '2312205', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17629, 'AMONTADA', '2300754', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17630, 'ITAPIPOCA', '2306405', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17631, 'TRAIRI', '2313500', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17632, 'PARACURU', '2310209', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17633, 'PARAIPABA', '2310258', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17634, 'SAO GONCALO DO AMARANTE', '2312403', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17635, 'ITAPAGE', '2306306', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17636, 'TURURU', '2313559', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17637, 'UMIRIM', '2313757', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17638, 'URUBURETAMA', '2313807', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17639, 'APUIARES', '2300903', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17640, 'GENERAL SAMPAIO', '2304608', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17641, 'PENTECOSTE', '2310704', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17642, 'SAO LUIS DO CURU', '2312601', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17643, 'TEJUCUOCA', '2313351', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17644, 'CANINDE', '2302800', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17645, 'CARIDADE', '2303006', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17646, 'ITATIRA', '2306603', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17647, 'PARAMOTI', '2310407', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17648, 'ACARAPE', '2300150', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17649, 'ARACOIABA', '2301208', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17650, 'ARATUBA', '2301406', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17651, 'BATURITE', '2302107', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17652, 'CAPISTRANO', '2302909', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17653, 'GUARAMIRANGA', '2305100', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17654, 'ITAPIUNA', '2306504', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17655, 'MULUNGU', '2309102', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17656, 'PACOTI', '2309805', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17657, 'PALMACIA', '2310100', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17658, 'REDENCAO', '2311603', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17659, 'BARREIRA', '2301950', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17660, 'CHOROZINHO', '2303956', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17661, 'OCARA', '2309458', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17662, 'BEBERIBE', '2302206', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17663, 'CASCAVEL', '2303501', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17664, 'PINDORETAMA', '2310852', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17665, 'AQUIRAZ', '2301000', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17666, 'CAUCAIA', '2303709', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17667, 'EUSEBIO', '2304285', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17668, 'FORTALEZA', '2304400', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17669, 'GUAIUBA', '2304954', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17670, 'ITAITINGA', '2306256', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17671, 'MARACANAU', '2307650', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17672, 'MARANGUAPE', '2307700', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17673, 'PACATUBA', '2309706', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17674, 'HORIZONTE', '2305233', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17675, 'PACAJUS', '2309607', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17676, 'ARARENDA', '2301257', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17677, 'CRATEUS', '2304103', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17678, 'INDEPENDENCIA', '2305605', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17679, 'IPAPORANGA', '2305654', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17680, 'MONSENHOR TABOSA', '2308609', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17681, 'NOVA RUSSAS', '2309300', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17682, 'NOVO ORIENTE', '2309409', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17683, 'QUITERIANOPOLIS', '2311264', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17684, 'TAMBORIL', '2313203', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17685, 'BANABUIU', '2301851', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17686, 'BOA VIAGEM', '2302404', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17687, 'CHORO', '2303931', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17688, 'IBARETAMA', '2305266', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17689, 'MADALENA', '2307635', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17690, 'QUIXADA', '2311306', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17691, 'QUIXERAMOBIM', '2311405', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17692, 'AIUABA', '2300408', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17693, 'ARNEIROZ', '2301505', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17694, 'CATARINA', '2303600', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17695, 'PARAMBU', '2310308', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17696, 'SABOEIRO', '2311900', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17697, 'TAUA', '2313302', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17698, 'ACOPIARA', '2300309', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17699, 'DEPUTADO IRAPUAN PINHEIRO', '2304269', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17700, 'MILHA', '2308351', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17701, 'MOMBACA', '2308500', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17702, 'PEDRA BRANCA', '2310506', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17703, 'PIQUET CARNEIRO', '2310902', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17704, 'SENADOR POMPEU', '2312700', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17705, 'SOLONOPOLE', '2313005', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17706, 'ARACATI', '2301109', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17707, 'FORTIM', '2304459', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17708, 'ICAPUI', '2305357', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17709, 'ITAICABA', '2306207', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17710, 'ALTO SANTO', '2300705', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17711, 'IBICUITINGA', '2305332', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17712, 'JAGUARUANA', '2307007', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17713, 'LIMOEIRO DO NORTE', '2307601', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17714, 'MORADA NOVA', '2308708', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17715, 'PALHANO', '2310001', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17716, 'QUIXERE', '2311504', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17717, 'RUSSAS', '2311801', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17718, 'SAO JOAO DO JAGUARIBE', '2312502', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17719, 'TABULEIRO DO NORTE', '2313104', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17720, 'JAGUARETAMA', '2306702', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17721, 'JAGUARIBARA', '2306801', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17722, 'JAGUARIBE', '2306900', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17723, 'ERERE', '2304277', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17724, 'IRACEMA', '2306009', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17725, 'PEREIRO', '2310803', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17726, 'POTIRETAMA', '2311231', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17727, 'CEDRO', '2303808', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17728, 'ICO', '2305407', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17729, 'IGUATU', '2305506', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17730, 'OROS', '2309508', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17731, 'QUIXELO', '2311355', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17732, 'ANTONINA DO NORTE', '2300804', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17733, 'CARIUS', '2303303', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17734, 'JUCAS', '2307403', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17735, 'TARRAFAS', '2313252', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17736, 'VARZEA ALEGRE', '2314003', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17737, 'BAIXIO', '2301802', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17738, 'IPAUMIRIM', '2305704', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17739, 'LAVRAS DA MANGABEIRA', '2307502', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17740, 'UMARI', '2313708', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17741, 'ARARIPE', '2301307', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17742, 'ASSARE', '2301604', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17743, 'CAMPOS SALES', '2302701', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17744, 'POTENGI', '2311207', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17745, 'SALITRE', '2311959', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17746, 'ALTANEIRA', '2300606', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17747, 'CARIRIACU', '2303204', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17748, 'FARIAS BRITO', '2304301', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17749, 'GRANJEIRO', '2304806', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17750, 'AURORA', '2301703', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17751, 'BARRO', '2302008', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17752, 'MAURITI', '2308104', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17753, 'BARBALHA', '2301901', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17754, 'CRATO', '2304202', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17755, 'JARDIM', '2307106', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17756, 'JUAZEIRO DO NORTE', '2307304', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17757, 'MISSAO VELHA', '2308401', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17758, 'NOVA OLINDA', '2309201', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17759, 'PORTEIRAS', '2311108', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17760, 'SANTANA DO CARIRI', '2312106', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17761, 'ABAIARA', '2300101', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17762, 'BREJO SANTO', '2302503', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17763, 'JATI', '2307205', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17764, 'MILAGRES', '2308302', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17765, 'PENAFORTE', '2310605', 23);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17766, 'AREIA BRANCA', '2401107', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17767, 'BARAUNA', '2401453', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17768, 'GROSSOS', '2404408', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17769, 'MOSSORO', '2408003', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17770, 'TIBAU', '2411056', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17771, 'SERRA DO MEL', '2413359', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17772, 'APODI', '2401008', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17773, 'CARAUBAS', '2402303', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17774, 'FELIPE GUERRA', '2403707', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17775, 'GOVERNADOR DIX-SEPT ROSADO', '2404309', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17776, 'AUGUSTO SEVERO', '2401305', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17777, 'JANDUIS', '2405207', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17778, 'MESSIAS TARGINO', '2407609', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17779, 'PARAU', '2408706', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17780, 'TRIUNFO POTIGUAR', '2414456', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17781, 'UPANEMA', '2414605', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17782, 'ACU', '2400208', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17783, 'ALTO DO RODRIGUES', '2400703', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17784, 'CARNAUBAIS', '2402501', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17785, 'IPANGUACU', '2404705', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17786, 'ITAJA', '2404853', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17787, 'JUCURUTU', '2406106', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17788, 'PENDENCIAS', '2409902', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17789, 'PORTO DO MANGUE', '2410256', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17790, 'SAO RAFAEL', '2412807', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17791, 'AGUA NOVA', '2400406', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17792, 'CORONEL JOAO PESSOA', '2402907', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17793, 'DOUTOR SEVERIANO', '2403202', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17794, 'ENCANTO', '2403301', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17795, 'LUIS GOMES', '2407005', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17796, 'MAJOR SALES', '2407252', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17797, 'RIACHO DE SANTANA', '2410801', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17798, 'SAO MIGUEL', '2412500', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17799, 'VENHA-VER', '2414753', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17800, 'ALEXANDRIA', '2400505', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17801, 'FRANCISCO DANTAS', '2403905', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17802, 'ITAU', '2404903', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17803, 'JOSE DA PENHA', '2406007', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17804, 'MARCELINO VIEIRA', '2407302', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17805, 'PARANA', '2408607', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17806, 'PAU DOS FERROS', '2409407', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17807, 'PILOES', '2410009', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17808, 'PORTALEGRE', '2410207', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17809, 'RAFAEL FERNANDES', '2410504', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17810, 'RIACHO DA CRUZ', '2410702', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17811, 'RODOLFO FERNANDES', '2411007', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17812, 'SAO FRANCISCO DO OESTE', '2411908', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17813, 'SEVERIANO MELO', '2413607', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17814, 'TABOLEIRO GRANDE', '2413805', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17815, 'TENENTE ANANIAS', '2414100', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17816, 'VICOSA', '2414902', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17817, 'ALMINO AFONSO', '2400604', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17818, 'ANTONIO MARTINS', '2400901', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17819, 'FRUTUOSO GOMES', '2404002', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17820, 'JOAO DIAS', '2405900', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17821, 'LUCRECIA', '2406908', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17822, 'MARTINS', '2407401', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17823, 'OLHO-D AGUA DO BORGES', '2408409', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17824, 'PATU', '2409308', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17825, 'RAFAEL GODEIRO', '2410603', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17826, 'SERRINHA DOS PINTOS', '2413557', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17827, 'UMARIZAL', '2414506', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17828, 'CAICARA DO NORTE', '2401859', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17829, 'GALINHOS', '2404101', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17830, 'GUAMARE', '2404507', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17831, 'MACAU', '2407203', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17832, 'SAO BENTO DO NORTE', '2411601', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17833, 'AFONSO BEZERRA', '2400307', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17834, 'ANGICOS', '2400802', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17835, 'CAICARA DO RIO DO VENTO', '2401909', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17836, 'FERNANDO PEDROZA', '2403756', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17837, 'JARDIM DE ANGICOS', '2405504', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17838, 'LAJES', '2406700', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17839, 'PEDRA PRETA', '2409605', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17840, 'PEDRO AVELINO', '2409704', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17841, 'BODO', '2401651', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17842, 'CERRO CORA', '2402709', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17843, 'FLORANIA', '2403806', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17844, 'LAGOA NOVA', '2406502', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17845, 'SANTANA DO MATOS', '2411403', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17846, 'SAO VICENTE', '2413003', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17847, 'TENENTE LAURENTINO CRUZ', '2414159', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17848, 'CAICO', '2402006', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17849, 'IPUEIRA', '2404804', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17850, 'JARDIM DE PIRANHAS', '2405603', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17851, 'SAO FERNANDO', '2411809', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17852, 'SAO JOAO DO SABUGI', '2412104', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17853, 'SERRA NEGRA DO NORTE', '2413409', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17854, 'TIMBAUBA DOS BATISTAS', '2414308', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17855, 'ACARI', '2400109', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17856, 'CARNAUBA DOS DANTAS', '2402402', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17857, 'CRUZETA', '2403004', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17858, 'CURRAIS NOVOS', '2403103', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17859, 'EQUADOR', '2403400', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17860, 'JARDIM DO SERIDO', '2405702', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17861, 'OURO BRANCO', '2408508', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17862, 'PARELHAS', '2408904', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17863, 'SANTANA DO SERIDO', '2411429', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17864, 'SAO JOSE DO SERIDO', '2412401', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17865, 'BENTO FERNANDES', '2401602', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17866, 'JANDAIRA', '2405108', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17867, 'JOAO CAMARA', '2405801', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17868, 'PARAZINHO', '2408805', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17869, 'POCO BRANCO', '2410108', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17870, 'BARCELONA', '2401503', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17871, 'CAMPO REDONDO', '2402105', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17872, 'CORONEL EZEQUIEL', '2402808', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17873, 'JACANA', '2405009', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17874, 'JAPI', '2405405', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17875, 'LAGOA DE VELHOS', '2406403', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17876, 'LAJES PINTADAS', '2406809', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17877, 'MONTE DAS GAMELEIRAS', '2407906', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17878, 'RUY BARBOSA', '2411106', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17879, 'SANTA CRUZ', '2411205', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17880, 'SAO BENTO DO TRAIRI', '2411700', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17881, 'SAO JOSE DO CAMPESTRE', '2412302', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17882, 'SAO TOME', '2412906', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17883, 'SERRA DE SAO BENTO', '2413300', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17884, 'SITIO NOVO', '2413706', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17885, 'TANGARA', '2414001', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17886, 'BOM JESUS', '2401701', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17887, 'BREJINHO', '2401800', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17888, 'IELMO MARINHO', '2404606', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17889, 'JANUARIO CICCO', '2405306', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17890, 'JUNDIA', '2406155', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17891, 'LAGOA D ANTA', '2406205', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17892, 'LAGOA DE PEDRAS', '2406304', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17893, 'LAGOA SALGADA', '2406601', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17894, 'MONTE ALEGRE', '2407807', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17895, 'NOVA CRUZ', '2408300', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17896, 'PASSA E FICA', '2409100', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17897, 'PASSAGEM', '2409209', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17898, 'SANTA MARIA', '2409332', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17899, 'PRESIDENTE JUSCELINO', '2410306', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17900, 'RIACHUELO', '2410900', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17901, 'SANTO ANTONIO', '2411502', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17902, 'SAO PAULO DO POTENGI', '2412609', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17903, 'SAO PEDRO', '2412708', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17904, 'SENADOR ELOI DE SOUZA', '2413102', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17905, 'SERRINHA', '2413508', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17906, 'VARZEA', '2414704', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17907, 'VERA CRUZ', '2414803', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17908, 'MAXARANGUAPE', '2407500', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17909, 'RIO DO FOGO', '2408953', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17910, 'PEDRA GRANDE', '2409506', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17911, 'PUREZA', '2410405', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17912, 'SAO MIGUEL DO GOSTOSO', '2412559', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17913, 'TAIPU', '2413904', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17914, 'TOUROS', '2414407', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17915, 'CEARA-MIRIM', '2402600', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17916, 'MACAIBA', '2407104', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17917, 'NISIA FLORESTA', '2408201', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17918, 'SAO GONCALO DO AMARANTE', '2412005', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17919, 'SAO JOSE DE MIPIBU', '2412203', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17920, 'PARNAMIRIM', '2403251', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17921, 'EXTREMOZ', '2403608', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17922, 'NATAL', '2408102', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17923, 'ARES', '2401206', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17924, 'BAIA FORMOSA', '2401404', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17925, 'CANGUARETAMA', '2402204', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17926, 'ESPIRITO SANTO', '2403509', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17927, 'GOIANINHA', '2404200', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17928, 'MONTANHAS', '2407708', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17929, 'PEDRO VELHO', '2409803', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17930, 'SENADOR GEORGINO AVELINO', '2413201', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17931, 'TIBAU DO SUL', '2414209', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17932, 'VILA FLOR', '2415008', 24);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17933, 'BELEM DO BREJO DO CRUZ', '2502003', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17934, 'BOM SUCESSO', '2502300', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17935, 'BREJO DO CRUZ', '2502805', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17936, 'BREJO DOS SANTOS', '2502904', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17937, 'CATOLE DO ROCHA', '2504306', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17938, 'JERICO', '2507408', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17939, 'LAGOA', '2508109', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17940, 'MATO GROSSO', '2509370', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17941, 'RIACHO DOS CAVALOS', '2512804', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17942, 'SAO BENTO', '2513901', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17943, 'SAO JOSE DO BREJO DO CRUZ', '2514651', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17944, 'SAO JOAO DO RIO DO PEIXE', '2500700', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17945, 'BERNARDINO BATISTA', '2502052', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17946, 'BOM JESUS', '2502201', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17947, 'BONITO DE SANTA FE', '2502409', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17948, 'CACHOEIRA DOS INDIOS', '2503308', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17949, 'CAJAZEIRAS', '2503704', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17950, 'CARRAPATEIRA', '2504108', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17951, 'MONTE HOREBE', '2509602', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17952, 'POCO DANTAS', '2512036', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17953, 'POCO DE JOSE DE MOURA', '2512077', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17954, 'SANTA HELENA', '2513307', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17955, 'SANTAREM', '2513653', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17956, 'SAO JOSE DE PIRANHAS', '2514503', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17957, 'TRIUNFO', '2516805', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17958, 'UIRAUNA', '2516904', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17959, 'APARECIDA', '2500775', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17960, 'CAJAZEIRINHAS', '2503753', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17961, 'CONDADO', '2504504', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17962, 'VISTA SERRANA', '2505501', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17963, 'LASTRO', '2508406', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17964, 'MALTA', '2508802', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17965, 'MARIZOPOLIS', '2509156', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17966, 'NAZAREZINHO', '2510006', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17967, 'PAULISTA', '2510907', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17968, 'POMBAL', '2512101', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17969, 'SANTA CRUZ', '2513208', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17970, 'SAO BENTINHO', '2513927', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17971, 'SAO DOMINGOS DE POMBAL', '2513968', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17972, 'SAO FRANCISCO', '2513984', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17973, 'SAO JOSE DA LAGOA TAPADA', '2514206', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17974, 'SOUSA', '2516201', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17975, 'VIEIROPOLIS', '2517209', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17976, 'AREIA DE BARAUNAS', '2501153', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17977, 'CACIMBA DE AREIA', '2503407', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17978, 'MAE D AGUA', '2508703', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17979, 'PASSAGEM', '2510709', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17980, 'PATOS', '2510808', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17981, 'QUIXABA', '2512606', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17982, 'SANTA TERESINHA', '2513802', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17983, 'SAO JOSE DE ESPINHARAS', '2514404', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17984, 'SAO JOSE DO BONFIM', '2514602', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17985, 'AGUIAR', '2500205', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17986, 'IGARACY', '2502607', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17987, 'CATINGUEIRA', '2504207', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17988, 'COREMAS', '2504801', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17989, 'EMAS', '2505907', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17990, 'NOVA OLINDA', '2510204', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17991, 'OLHO D AGUA', '2510402', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17992, 'PIANCO', '2511301', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17993, 'SANTANA DOS GARROTES', '2513604', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17994, 'BOA VENTURA', '2502102', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17995, 'CONCEICAO', '2504405', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17996, 'CURRAL VELHO', '2505303', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17997, 'DIAMANTE', '2505600', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17998, 'IBIARA', '2506608', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (17999, 'ITAPORANGA', '2507002', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18000, 'PEDRA BRANCA', '2511004', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18001, 'SANTA INES', '2513356', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18002, 'SANTANA DE MANGUEIRA', '2513505', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18003, 'SAO JOSE DE CAIANA', '2514305', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18004, 'SERRA GRANDE', '2515708', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18005, 'AGUA BRANCA', '2500106', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18006, 'CACIMBAS', '2503555', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18007, 'DESTERRO', '2505402', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18008, 'IMACULADA', '2506707', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18009, 'JURU', '2508000', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18010, 'MANAIRA', '2509008', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18011, 'MATUREIA', '2509396', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18012, 'PRINCESA ISABEL', '2512309', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18013, 'SAO JOSE DE PRINCESA', '2514552', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18014, 'TAVARES', '2516607', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18015, 'TEIXEIRA', '2516706', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18016, 'JUNCO DO SERIDO', '2507804', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18017, 'SALGADINHO', '2513000', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18018, 'SANTA LUZIA', '2513406', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18019, 'SAO JOSE DO SABUGI', '2514701', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18020, 'SAO MAMEDE', '2514909', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18021, 'VARZEA', '2517100', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18022, 'BARAUNA', '2501534', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18023, 'CUBATI', '2505006', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18024, 'FREI MARTINHO', '2506202', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18025, 'JUAZEIRINHO', '2507705', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18026, 'NOVA PALMEIRA', '2510303', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18027, 'PEDRA LAVRADA', '2511103', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18028, 'PICUI', '2511400', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18029, 'SERIDO', '2515401', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18030, 'TENORIO', '2516755', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18031, 'AMPARO', '2500734', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18032, 'ASSUNCAO', '2501351', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18033, 'CAMALAU', '2503902', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18034, 'CONGO', '2504702', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18035, 'COXIXOLA', '2504850', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18036, 'LIVRAMENTO', '2508505', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18037, 'MONTEIRO', '2509701', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18038, 'OURO VELHO', '2510600', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18039, 'PARARI', '2510659', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18040, 'PRATA', '2512200', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18041, 'SAO JOAO DO TIGRE', '2514107', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18042, 'SAO JOSE DOS CORDEIROS', '2514800', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18043, 'SAO SEBASTIAO DO UMBUZEIRO', '2515203', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18044, 'SERRA BRANCA', '2515500', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18045, 'SUME', '2516300', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18046, 'TAPEROA', '2516508', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18047, 'ZABELE', '2517407', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18048, 'ALCANTIL', '2500536', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18049, 'BARRA DE SANTANA', '2501575', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18050, 'BARRA DE SAO MIGUEL', '2501708', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18051, 'BOQUEIRAO', '2502508', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18052, 'CABACEIRAS', '2503100', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18053, 'CARAUBAS', '2504074', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18054, 'CATURITE', '2504355', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18055, 'GURJAO', '2506509', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18056, 'RIACHO DE SANTO ANTONIO', '2512788', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18057, 'SANTO ANDRE', '2513851', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18058, 'SAO DOMINGOS DO CARIRI', '2513943', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18059, 'SAO JOAO DO CARIRI', '2514008', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18060, 'ALGODAO DE JANDAIRA', '2500577', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18061, 'ARARA', '2500908', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18062, 'BARRA DE SANTA ROSA', '2501609', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18063, 'CUITE', '2505105', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18064, 'DAMIAO', '2505352', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18065, 'NOVA FLORESTA', '2510105', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18066, 'OLIVEDOS', '2510501', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18067, 'POCINHOS', '2512002', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18068, 'REMIGIO', '2512705', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18069, 'SOLEDADE', '2516102', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18070, 'SOSSEGO', '2516151', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18071, 'ARARUNA', '2501005', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18072, 'CACIMBA DE DENTRO', '2503506', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18073, 'CASSERENGUE', '2504157', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18074, 'DONA INES', '2505709', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18075, 'RIACHAO', '2512747', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18076, 'SOLANEA', '2516003', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18077, 'CAMPO DE SANTANA', '2516409', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18078, 'AREIAL', '2501203', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18079, 'ESPERANCA', '2506004', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18080, 'MONTADAS', '2509503', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18081, 'SAO SEBASTIAO DE LAGOA DE ROCA', '2515104', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18082, 'ALAGOA GRANDE', '2500304', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18083, 'ALAGOA NOVA', '2500403', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18084, 'AREIA', '2501104', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18085, 'BANANEIRAS', '2501500', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18086, 'BORBOREMA', '2502706', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18087, 'MATINHAS', '2509339', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18088, 'PILOES', '2511608', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18089, 'SERRARIA', '2515906', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18090, 'ALAGOINHA', '2500502', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18091, 'ARACAGI', '2500809', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18092, 'BELEM', '2501906', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18093, 'CAICARA', '2503605', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18094, 'CUITEGI', '2505204', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18095, 'DUAS ESTRADAS', '2505808', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18096, 'GUARABIRA', '2506301', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18097, 'LAGOA DE DENTRO', '2508208', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18098, 'LOGRADOURO', '2508554', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18099, 'MULUNGU', '2509800', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18100, 'PILOEZINHOS', '2511707', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18101, 'PIRPIRITUBA', '2511806', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18102, 'SERRA DA RAIZ', '2515609', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18103, 'SERTAOZINHO', '2515930', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18104, 'BOA VISTA', '2502151', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18105, 'CAMPINA GRANDE', '2504009', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18106, 'FAGUNDES', '2506103', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18107, 'LAGOA SECA', '2508307', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18108, 'MASSARANDUBA', '2509206', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18109, 'PUXINANA', '2512408', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18110, 'QUEIMADAS', '2512507', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18111, 'SERRA REDONDA', '2515807', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18112, 'CALDAS BRANDAO', '2503803', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18113, 'GURINHEM', '2506400', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18114, 'INGA', '2506806', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18115, 'ITABAIANA', '2506905', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18116, 'ITATUBA', '2507200', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18117, 'JUAREZ TAVORA', '2507606', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18118, 'MOGEIRO', '2509404', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18119, 'RIACHAO DO BACAMARTE', '2512754', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18120, 'SALGADO DE SAO FELIX', '2513109', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18121, 'AROEIRAS', '2501302', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18122, 'GADO BRAVO', '2506251', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18123, 'NATUBA', '2509909', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18124, 'SANTA CECILIA', '2513158', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18125, 'UMBUZEIRO', '2517001', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18126, 'BAIA DA TRAICAO', '2501401', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18127, 'CAPIM', '2504033', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18128, 'CUITE DE MAMANGUAPE', '2505238', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18129, 'CURRAL DE CIMA', '2505279', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18130, 'ITAPOROROCA', '2507101', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18131, 'JACARAU', '2507309', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18132, 'MAMANGUAPE', '2508901', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18133, 'MARCACAO', '2509057', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18134, 'MATARACA', '2509305', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18135, 'PEDRO REGIS', '2512721', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18136, 'RIO TINTO', '2512903', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18137, 'CRUZ DO ESPIRITO SANTO', '2504900', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18138, 'JURIPIRANGA', '2507903', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18139, 'MARI', '2509107', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18140, 'PILAR', '2511509', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18141, 'RIACHAO DO POCO', '2512762', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18142, 'SAO JOSE DOS RAMOS', '2514453', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18143, 'SAO MIGUEL DE TAIPU', '2515005', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18144, 'SAPE', '2515302', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18145, 'SOBRADO', '2515971', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18146, 'BAYEUX', '2501807', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18147, 'CABEDELO', '2503209', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18148, 'CONDE', '2504603', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18149, 'JOAO PESSOA', '2507507', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18150, 'LUCENA', '2508604', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18151, 'SANTA RITA', '2513703', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18152, 'ALHANDRA', '2500601', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18153, 'CAAPORA', '2503001', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18154, 'PEDRAS DE FOGO', '2511202', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18155, 'PITIMBU', '2511905', 25);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18156, 'ARARIPINA', '2601102', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18157, 'BODOCO', '2602001', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18158, 'EXU', '2605301', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18159, 'GRANITO', '2606309', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18160, 'IPUBI', '2607307', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18161, 'OURICURI', '2609907', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18162, 'SANTA CRUZ', '2612455', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18163, 'SANTA FILOMENA', '2612554', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18164, 'MOREILANDIA', '2614303', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18165, 'TRINDADE', '2615607', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18166, 'CEDRO', '2604304', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18167, 'MIRANDIBA', '2609303', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18168, 'PARNAMIRIM', '2610400', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18169, 'SALGUEIRO', '2612208', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18170, 'SAO JOSE DO BELMONTE', '2613503', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18171, 'SERRITA', '2614006', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18172, 'VERDEJANTE', '2616100', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18173, 'AFOGADOS DA INGAZEIRA', '2600104', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18174, 'BREJINHO', '2602506', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18175, 'CALUMBI', '2603405', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18176, 'CARNAIBA', '2603900', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18177, 'FLORES', '2605608', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18178, 'IGUARACI', '2606903', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18179, 'INGAZEIRA', '2607109', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18180, 'ITAPETIM', '2607703', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18181, 'QUIXABA', '2611533', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18182, 'SANTA CRUZ DA BAIXA VERDE', '2612471', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18183, 'SANTA TEREZINHA', '2612802', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18184, 'SAO JOSE DO EGITO', '2613602', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18185, 'SERRA TALHADA', '2613909', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18186, 'SOLIDAO', '2614402', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18187, 'TABIRA', '2614600', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18188, 'TRIUNFO', '2615706', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18189, 'TUPARETAMA', '2615904', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18190, 'ARCOVERDE', '2601201', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18191, 'BETANIA', '2601805', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18192, 'CUSTODIA', '2605103', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18193, 'IBIMIRIM', '2606606', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18194, 'INAJA', '2607000', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18195, 'MANARI', '2609154', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18196, 'SERTANIA', '2614105', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18197, 'AFRANIO', '2600203', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18198, 'CABROBO', '2603009', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18199, 'DORMENTES', '2605152', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18200, 'LAGOA GRANDE', '2608750', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18201, 'OROCO', '2609808', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18202, 'PETROLINA', '2611101', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18203, 'SANTA MARIA DA BOA VISTA', '2612604', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18204, 'TERRA NOVA', '2615201', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18205, 'BELEM DE SAO FRANCISCO', '2601607', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18206, 'CARNAUBEIRA DA PENHA', '2603926', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18207, 'FLORESTA', '2605707', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18208, 'ITACURUBA', '2607406', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18209, 'JATOBA', '2608057', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18210, 'PETROLANDIA', '2611002', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18211, 'TACARATU', '2614808', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18212, 'AGUAS BELAS', '2600500', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18213, 'BUIQUE', '2602803', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18214, 'ITAIBA', '2607505', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18215, 'PEDRA', '2610806', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18216, 'TUPANATINGA', '2615805', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18217, 'VENTUROSA', '2616001', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18218, 'ALAGOINHA', '2600609', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18219, 'BELO JARDIM', '2601706', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18220, 'BEZERROS', '2601904', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18221, 'BREJO DA MADRE DE DEUS', '2602605', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18222, 'CACHOEIRINHA', '2603108', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18223, 'CAPOEIRAS', '2603801', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18224, 'CARUARU', '2604106', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18225, 'GRAVATA', '2606408', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18226, 'JATAUBA', '2608008', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18227, 'PESQUEIRA', '2610905', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18228, 'POCAO', '2611200', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18229, 'RIACHO DAS ALMAS', '2611705', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18230, 'SANHARO', '2612406', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18231, 'SAO BENTO DO UNA', '2613008', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18232, 'SAO CAITANO', '2613107', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18233, 'TACAIMBO', '2614709', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18234, 'CASINHAS', '2604155', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18235, 'FREI MIGUELINHO', '2605806', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18236, 'SANTA CRUZ DO CAPIBARIBE', '2612505', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18237, 'SANTA MARIA DO CAMBUCA', '2612703', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18238, 'SURUBIM', '2614501', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18239, 'TAQUARITINGA DO NORTE', '2615003', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18240, 'TORITAMA', '2615409', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18241, 'VERTENTE DO LERIO', '2616183', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18242, 'VERTENTES', '2616209', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18243, 'BOM JARDIM', '2602209', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18244, 'CUMARU', '2604908', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18245, 'FEIRA NOVA', '2605400', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18246, 'JOAO ALFREDO', '2608107', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18247, 'LIMOEIRO', '2608909', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18248, 'MACHADOS', '2609105', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18249, 'OROBO', '2609709', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18250, 'PASSIRA', '2610509', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18251, 'SALGADINHO', '2612109', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18252, 'SAO VICENTE FERRER', '2613800', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18253, 'ANGELIM', '2601003', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18254, 'BOM CONSELHO', '2602100', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18255, 'BREJAO', '2602407', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18256, 'CAETES', '2603207', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18257, 'CALCADO', '2603306', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18258, 'CANHOTINHO', '2603702', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18259, 'CORRENTES', '2604700', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18260, 'GARANHUNS', '2606002', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18261, 'IATI', '2606507', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18262, 'JUCATI', '2608255', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18263, 'JUPI', '2608305', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18264, 'JUREMA', '2608404', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18265, 'LAGOA DO OURO', '2608602', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18266, 'LAJEDO', '2608800', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18267, 'PALMEIRINA', '2610103', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18268, 'PARANATAMA', '2610301', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18269, 'SALOA', '2612307', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18270, 'SAO JOAO', '2613206', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18271, 'TEREZINHA', '2615102', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18272, 'AGRESTINA', '2600302', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18273, 'ALTINHO', '2600807', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18274, 'BARRA DE GUABIRABA', '2601300', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18275, 'BONITO', '2602308', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18276, 'CAMOCIM DE SAO FELIX', '2603504', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18277, 'CUPIRA', '2605004', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18278, 'IBIRAJUBA', '2606705', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18279, 'LAGOA DOS GATOS', '2608701', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18280, 'PANELAS', '2610202', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18281, 'SAIRE', '2612000', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18282, 'SAO JOAQUIM DO MONTE', '2613305', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18283, 'ALIANCA', '2600708', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18284, 'BUENOS AIRES', '2602704', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18285, 'CAMUTANGA', '2603603', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18286, 'CARPINA', '2604007', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18287, 'CONDADO', '2604601', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18288, 'FERREIROS', '2605509', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18289, 'GOIANA', '2606200', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18290, 'ITAMBE', '2607653', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18291, 'ITAQUITINGA', '2607802', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18292, 'LAGOA DO CARRO', '2608453', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18293, 'LAGOA DO ITAENGA', '2608503', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18294, 'MACAPARANA', '2609006', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18295, 'NAZARE DA MATA', '2609501', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18296, 'PAUDALHO', '2610608', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18297, 'TIMBAUBA', '2615300', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18298, 'TRACUNHAEM', '2615508', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18299, 'VICENCIA', '2616308', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18300, 'CHA DE ALEGRIA', '2604403', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18301, 'CHA GRANDE', '2604502', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18302, 'GLORIA DO GOITA', '2606101', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18303, 'POMBOS', '2611309', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18304, 'VITORIA DE SANTO ANTAO', '2616407', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18305, 'AGUA PRETA', '2600401', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18306, 'AMARAJI', '2600906', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18307, 'BARREIROS', '2601409', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18308, 'BELEM DE MARIA', '2601508', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18309, 'CATENDE', '2604205', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18310, 'CORTES', '2604809', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18311, 'ESCADA', '2605202', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18312, 'GAMELEIRA', '2605905', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18313, 'JAQUEIRA', '2607950', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18314, 'JOAQUIM NABUCO', '2608206', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18315, 'MARAIAL', '2609204', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18316, 'PALMARES', '2610004', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18317, 'PRIMAVERA', '2611408', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18318, 'QUIPAPA', '2611507', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18319, 'RIBEIRAO', '2611804', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18320, 'RIO FORMOSO', '2611903', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18321, 'SAO BENEDITO DO SUL', '2612901', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18322, 'SAO JOSE DA COROA GRANDE', '2613404', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18323, 'SIRINHAEM', '2614204', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18324, 'TAMANDARE', '2614857', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18325, 'XEXEU', '2616506', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18326, 'ARACOIABA', '2601052', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18327, 'IGARASSU', '2606804', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18328, 'ILHA DE ITAMARACA', '2607604', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18329, 'ITAPISSUMA', '2607752', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18330, 'ABREU E LIMA', '2600054', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18331, 'CAMARAGIBE', '2603454', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18332, 'JABOATAO DOS GUARARAPES', '2607901', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18333, 'MORENO', '2609402', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18334, 'OLINDA', '2609600', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18335, 'PAULISTA', '2610707', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18337, 'SAO LOURENCO DA MATA', '2613701', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18338, 'CABO DE SANTO AGOSTINHO', '2602902', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18339, 'IPOJUCA', '2607208', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18340, 'FERNANDO DE NORONHA', '2605459', 26);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18341, 'AGUA BRANCA', '2700102', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18342, 'CANAPI', '2701605', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18343, 'INHAPI', '2703304', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18344, 'MATA GRANDE', '2705002', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18345, 'PARICONHA', '2706422', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18346, 'DELMIRO GOUVEIA', '2702405', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18347, 'OLHO D AGUA DO CASADO', '2705804', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18348, 'PIRANHAS', '2707107', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18349, 'CARNEIROS', '2701803', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18350, 'DOIS RIACHOS', '2702504', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18351, 'MARAVILHA', '2704609', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18352, 'OURO BRANCO', '2706109', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18353, 'PALESTINA', '2706208', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18354, 'PAO DE ACUCAR', '2706406', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18355, 'POCO DAS TRINCHEIRAS', '2707206', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18356, 'SANTANA DO IPANEMA', '2708006', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18357, 'SAO JOSE DA TAPERA', '2708402', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18358, 'SENADOR RUI PALMEIRA', '2708956', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18359, 'BATALHA', '2700706', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18360, 'BELO MONTE', '2700904', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18361, 'JACARE DOS HOMENS', '2703403', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18362, 'JARAMATAIA', '2703700', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18363, 'MAJOR ISIDORO', '2704401', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18364, 'MONTEIROPOLIS', '2705408', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18365, 'OLHO D AGUA DAS FLORES', '2705705', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18366, 'OLIVENCA', '2706000', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18367, 'BELEM', '2700805', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18368, 'CACIMBINHAS', '2701209', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18369, 'ESTRELA DE ALAGOAS', '2702553', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18370, 'IGACI', '2703106', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18371, 'MARIBONDO', '2704807', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18372, 'MAR VERMELHO', '2704906', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18373, 'MINADOR DO NEGRAO', '2705309', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18374, 'PALMEIRA DOS INDIOS', '2706307', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18375, 'PAULO JACINTO', '2706604', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18376, 'QUEBRANGULO', '2707602', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18377, 'TANQUE D ARCA', '2709004', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18378, 'ARAPIRACA', '2700300', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18379, 'CAMPO GRANDE', '2701506', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18380, 'COITE DO NOIA', '2702009', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18381, 'CRAIBAS', '2702355', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18382, 'FEIRA GRANDE', '2702603', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18383, 'GIRAU DO PONCIANO', '2702900', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18384, 'LAGOA DA CANOA', '2704104', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18385, 'LIMOEIRO DE ANADIA', '2704203', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18386, 'SAO SEBASTIAO', '2708808', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18387, 'TAQUARANA', '2709103', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18388, 'OLHO D AGUA GRANDE', '2705903', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18389, 'SAO BRAS', '2708204', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18390, 'TRAIPU', '2709202', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18391, 'CHA PRETA', '2701902', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18392, 'IBATEGUARA', '2703007', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18393, 'PINDOBA', '2707008', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18394, 'SANTANA DO MUNDAU', '2708105', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18395, 'SAO JOSE DA LAJE', '2708303', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18396, 'UNIAO DOS PALMARES', '2709301', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18397, 'VICOSA', '2709400', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18398, 'ATALAIA', '2700409', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18399, 'BRANQUINHA', '2701100', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18400, 'CAJUEIRO', '2701308', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18401, 'CAMPESTRE', '2701357', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18402, 'CAPELA', '2701704', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18403, 'COLONIA LEOPOLDINA', '2702108', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18404, 'FLEXEIRAS', '2702801', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18405, 'JACUIPE', '2703502', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18406, 'JOAQUIM GOMES', '2703809', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18407, 'JUNDIA', '2703908', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18408, 'MATRIZ DE CAMARAGIBE', '2705101', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18409, 'MESSIAS', '2705200', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18410, 'MURICI', '2705507', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18411, 'NOVO LINO', '2705606', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18412, 'PORTO CALVO', '2707305', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18413, 'SAO LUIS DO QUITUNDE', '2708501', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18414, 'JAPARATINGA', '2703601', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18415, 'MARAGOGI', '2704500', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18416, 'PASSO DE CAMARAGIBE', '2706505', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18417, 'PORTO DE PEDRAS', '2707404', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18418, 'SAO MIGUEL DOS MILAGRES', '2708709', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18419, 'BARRA DE SANTO ANTONIO', '2700508', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18420, 'BARRA DE SAO MIGUEL', '2700607', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18421, 'COQUEIRO SECO', '2702207', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18422, 'MACEIO', '2704302', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18423, 'MARECHAL DEODORO', '2704708', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18424, 'PARIPUEIRA', '2706448', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18425, 'PILAR', '2706901', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18426, 'RIO LARGO', '2707701', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18427, 'SANTA LUZIA DO NORTE', '2707909', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18428, 'SATUBA', '2708907', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18429, 'ANADIA', '2700201', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18430, 'BOCA DA MATA', '2701001', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18431, 'CAMPO ALEGRE', '2701407', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18432, 'CORURIPE', '2702306', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18433, 'JEQUIA DA PRAIA', '2703759', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18434, 'JUNQUEIRO', '2704005', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18435, 'ROTEIRO', '2707800', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18436, 'SAO MIGUEL DOS CAMPOS', '2708600', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18437, 'TEOTONIO VILELA', '2709152', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18438, 'FELIZ DESERTO', '2702702', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18439, 'IGREJA NOVA', '2703205', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18440, 'PENEDO', '2706703', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18441, 'PIACABUCU', '2706802', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18442, 'PORTO REAL DO COLEGIO', '2707503', 27);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18443, 'CANINDE DE SAO FRANCISCO', '2801207', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18444, 'FEIRA NOVA', '2802205', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18445, 'GARARU', '2802403', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18446, 'GRACHO CARDOSO', '2802601', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18447, 'ITABI', '2803104', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18448, 'MONTE ALEGRE DE SERGIPE', '2804201', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18449, 'NOSSA SENHORA DA GLORIA', '2804508', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18450, 'POCO REDONDO', '2805406', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18451, 'PORTO DA FOLHA', '2805604', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18452, 'CARIRA', '2801405', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18453, 'FREI PAULO', '2802304', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18454, 'NOSSA SENHORA APARECIDA', '2804458', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18455, 'PEDRA MOLE', '2805000', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18456, 'PINHAO', '2805208', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18457, 'RIBEIROPOLIS', '2806008', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18458, 'AQUIDABA', '2800209', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18459, 'CUMBE', '2801900', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18460, 'MALHADA DOS BOIS', '2803807', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18461, 'MURIBECA', '2804300', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18462, 'NOSSA SENHORA DAS DORES', '2804607', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18463, 'SAO MIGUEL DO ALEIXO', '2807006', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18464, 'AREIA BRANCA', '2800506', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18465, 'CAMPO DO BRITO', '2801009', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18466, 'ITABAIANA', '2802908', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18467, 'MACAMBIRA', '2803708', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18468, 'MALHADOR', '2803906', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18469, 'MOITA BONITA', '2804102', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18470, 'SAO DOMINGOS', '2806800', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18471, 'POCO VERDE', '2805505', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18472, 'SIMAO DIAS', '2807105', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18473, 'TOBIAS BARRETO', '2807402', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18474, 'LAGARTO', '2803500', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18475, 'RIACHAO DO DANTAS', '2805802', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18476, 'AMPARO DE SAO FRANCISCO', '2800100', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18477, 'BREJO GRANDE', '2800704', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18478, 'CANHOBA', '2801108', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18479, 'CEDRO DE SAO JOAO', '2801603', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18480, 'ILHA DAS FLORES', '2802700', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18481, 'NEOPOLIS', '2804409', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18482, 'NOSSA SENHORA DE LOURDES', '2804706', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18483, 'PROPRIA', '2805703', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18484, 'SANTANA DO SAO FRANCISCO', '2806404', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18485, 'TELHA', '2807303', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18486, 'CAPELA', '2801306', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18487, 'DIVINA PASTORA', '2802007', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18488, 'SANTA ROSA DE LIMA', '2806503', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18489, 'SIRIRI', '2807204', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18490, 'JAPARATUBA', '2803302', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18491, 'JAPOATA', '2803401', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18492, 'PACATUBA', '2804904', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18493, 'PIRAMBU', '2805307', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18494, 'SAO FRANCISCO', '2806909', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18495, 'CARMOPOLIS', '2801504', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18496, 'GENERAL MAYNARD', '2802502', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18497, 'LARANJEIRAS', '2803609', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18498, 'MARUIM', '2804003', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18499, 'RIACHUELO', '2805901', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18500, 'ROSARIO DO CATETE', '2806107', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18501, 'SANTO AMARO DAS BROTAS', '2806602', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18502, 'ARACAJU', '2800308', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18503, 'BARRA DOS COQUEIROS', '2800605', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18504, 'NOSSA SENHORA DO SOCORRO', '2804805', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18505, 'SAO CRISTOVAO', '2806701', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18506, 'ARAUA', '2800407', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18507, 'BOQUIM', '2800670', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18508, 'CRISTINAPOLIS', '2801702', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18509, 'ITABAIANINHA', '2803005', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18510, 'PEDRINHAS', '2805109', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18511, 'SALGADO', '2806206', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18512, 'TOMAR DO GERU', '2807501', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18513, 'UMBAUBA', '2807600', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18514, 'ESTANCIA', '2802106', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18515, 'INDIAROBA', '2802809', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18516, 'ITAPORANGA D AJUDA', '2803203', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18517, 'SANTA LUZIA DO ITANHY', '2806305', 28);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18518, 'BAIANOPOLIS', '2902500', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18519, 'BARREIRAS', '2903201', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18520, 'CATOLANDIA', '2907400', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18521, 'FORMOSA DO RIO PRETO', '2911105', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18522, 'LUIS EDUARDO MAGALHAES', '2919553', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18523, 'RIACHAO DAS NEVES', '2926202', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18524, 'SAO DESIDERIO', '2928901', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18525, 'ANGICAL', '2901403', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18526, 'BREJOLANDIA', '2904407', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18527, 'COTEGIPE', '2909406', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18528, 'CRISTOPOLIS', '2909703', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18529, 'MANSIDAO', '2920452', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18530, 'SANTA RITA DE CASSIA', '2928406', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18531, 'TABOCAS DO BREJO VELHO', '2930907', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18532, 'WANDERLEY', '2933455', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18533, 'CANAPOLIS', '2906105', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18534, 'COCOS', '2908101', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18535, 'CORIBE', '2909109', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18536, 'CORRENTINA', '2909307', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18537, 'JABORANDI', '2917359', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18538, 'SANTA MARIA DA VITORIA', '2928109', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18539, 'SANTANA', '2928208', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18540, 'SAO FELIX DO CORIBE', '2929057', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18541, 'SERRA DOURADA', '2930303', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18542, 'CAMPO ALEGRE DE LOURDES', '2905909', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18543, 'CASA NOVA', '2907202', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18544, 'CURACA', '2909901', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18545, 'JUAZEIRO', '2918407', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18546, 'PILAO ARCADO', '2924405', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18547, 'REMANSO', '2926004', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18548, 'SENTO SE', '2930204', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18549, 'SOBRADINHO', '2930774', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18550, 'ABARE', '2900207', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18551, 'CHORROCHO', '2907707', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18552, 'GLORIA', '2911402', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18553, 'MACURURE', '2919900', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18554, 'PAULO AFONSO', '2924009', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18555, 'RODELAS', '2927101', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18556, 'BARRA', '2902708', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18557, 'BURITIRAMA', '2904753', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18558, 'IBOTIRAMA', '2913200', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18559, 'ITAGUACU DA BAHIA', '2915353', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18560, 'MORPARA', '2921609', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18561, 'MUQUEM DE SAO FRANCISCO', '2922250', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18562, 'XIQUE-XIQUE', '2933604', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18563, 'BOM JESUS DA LAPA', '2903904', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18564, 'CARINHANHA', '2907103', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18565, 'FEIRA DA MATA', '2910776', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18566, 'PARATINGA', '2923704', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18567, 'SERRA DO RAMALHO', '2930154', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18568, 'SITIO DO MATO', '2930758', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18569, 'ANDORINHA', '2901353', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18570, 'ANTONIO GONCALVES', '2901809', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18571, 'CAMPO FORMOSO', '2906006', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18572, 'FILADELFIA', '2910859', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18573, 'ITIUBA', '2917003', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18574, 'JAGUARARI', '2917706', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18575, 'PINDOBACU', '2924603', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18576, 'SENHOR DO BONFIM', '2930105', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18577, 'UMBURANAS', '2932457', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18578, 'AMERICA DOURADA', '2901155', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18579, 'BARRA DO MENDES', '2903003', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18580, 'BARRO ALTO', '2903235', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18581, 'CAFARNAUM', '2905305', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18582, 'CANARANA', '2906204', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18583, 'CENTRAL', '2907608', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18584, 'GENTIO DO OURO', '2911303', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18585, 'IBIPEBA', '2912400', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18586, 'IBITITA', '2913101', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18587, 'IRAQUARA', '2914406', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18588, 'IRECE', '2914604', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18589, 'JOAO DOURADO', '2918357', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18590, 'JUSSARA', '2918506', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18591, 'LAPAO', '2919157', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18592, 'MULUNGU DO MORRO', '2922052', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18593, 'PRESIDENTE DUTRA', '2925600', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18594, 'SAO GABRIEL', '2929255', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18595, 'SOUTO SOARES', '2930808', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18596, 'UIBAI', '2932408', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18597, 'CAEM', '2905107', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18598, 'CALDEIRAO GRANDE', '2905503', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18599, 'CAPIM GROSSO', '2906873', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18600, 'JACOBINA', '2917508', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18601, 'MIGUEL CALMON', '2921203', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18602, 'MIRANGABA', '2921401', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18603, 'MORRO DO CHAPEU', '2921708', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18604, 'OUROLANDIA', '2923357', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18605, 'PIRITIBA', '2924801', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18606, 'PONTO NOVO', '2925253', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18607, 'QUIXABEIRA', '2925931', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18608, 'SAO JOSE DO JACUIPE', '2929370', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18609, 'SAUDE', '2929800', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18610, 'SERROLANDIA', '2930600', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18611, 'VARZEA DO POCO', '2933109', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18612, 'VARZEA NOVA', '2933158', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18613, 'BAIXA GRANDE', '2902609', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18614, 'BOA VISTA DO TUPIM', '2903805', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18615, 'IACU', '2911907', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18616, 'IBIQUERA', '2912608', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18617, 'ITABERABA', '2914703', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18618, 'LAJEDINHO', '2919009', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18619, 'MACAJUBA', '2919603', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18620, 'MAIRI', '2920106', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18621, 'MUNDO NOVO', '2922102', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18622, 'RUY BARBOSA', '2927200', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18623, 'TAPIRAMUTA', '2931301', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18624, 'VARZEA DA ROCA', '2933059', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18625, 'AGUA FRIA', '2900405', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18626, 'ANGUERA', '2901502', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18627, 'ANTONIO CARDOSO', '2901700', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18628, 'CONCEICAO DA FEIRA', '2908200', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18629, 'CONCEICAO DO JACUIPE', '2908507', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18630, 'CORACAO DE MARIA', '2908903', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18631, 'ELISIO MEDRADO', '2910305', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18633, 'IPECAETA', '2913804', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18634, 'IPIRA', '2914000', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18635, 'IRARA', '2914505', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18636, 'ITATIM', '2916856', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18637, 'OURICANGAS', '2923308', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18638, 'PEDRAO', '2924108', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18639, 'PINTADAS', '2924652', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18640, 'RAFAEL JAMBEIRO', '2925956', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18641, 'SANTA BARBARA', '2927507', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18642, 'SANTANOPOLIS', '2928307', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18643, 'SANTA TERESINHA', '2928505', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18644, 'SANTO ESTEVAO', '2928802', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18645, 'SAO GONCALO DOS CAMPOS', '2929305', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18646, 'SERRA PRETA', '2930402', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18647, 'TANQUINHO', '2931103', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18648, 'TEODORO SAMPAIO', '2931400', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18649, 'CORONEL JOAO SA', '2909208', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18650, 'JEREMOABO', '2918100', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18651, 'PEDRO ALEXANDRE', '2924207', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18652, 'SANTA BRIGIDA', '2927606', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18653, 'SITIO DO QUINTO', '2930766', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18654, 'CANSANCAO', '2906808', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18655, 'CANUDOS', '2906824', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18656, 'EUCLIDES DA CUNHA', '2910701', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18657, 'MONTE SANTO', '2921500', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18658, 'NORDESTINA', '2922656', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18659, 'QUEIMADAS', '2925808', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18660, 'QUIJINGUE', '2925907', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18661, 'TUCANO', '2931905', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18662, 'UAUA', '2932002', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18663, 'ADUSTINA', '2900355', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18664, 'ANTAS', '2901601', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18665, 'BANZAE', '2902658', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18666, 'CICERO DANTAS', '2907806', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18667, 'CIPO', '2907905', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18668, 'FATIMA', '2910750', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18669, 'HELIOPOLIS', '2911857', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18670, 'ITAPICURU', '2916500', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18671, 'NOVA SOURE', '2922904', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18672, 'NOVO TRIUNFO', '2923050', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18673, 'OLINDINA', '2923100', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18674, 'PARIPIRANGA', '2923803', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18675, 'RIBEIRA DO AMPARO', '2926509', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18676, 'RIBEIRA DO POMBAL', '2926608', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18677, 'ARACI', '2902104', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18678, 'BARROCAS', '2903276', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18679, 'BIRITINGA', '2903607', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18680, 'CANDEAL', '2906402', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18681, 'CAPELA DO ALTO ALEGRE', '2906857', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18682, 'CONCEICAO DO COITE', '2908408', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18683, 'GAVIAO', '2911253', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18684, 'ICHU', '2913309', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18685, 'LAMARAO', '2919108', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18686, 'NOVA FATIMA', '2922730', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18687, 'PE DE SERRA', '2924058', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18688, 'RETIROLANDIA', '2926103', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18689, 'RIACHAO DO JACUIPE', '2926301', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18690, 'SANTALUZ', '2928000', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18691, 'SAO DOMINGOS', '2928950', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18692, 'SERRINHA', '2930501', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18693, 'TEOFILANDIA', '2931509', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18694, 'VALENTE', '2933000', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18695, 'ACAJUTIBA', '2900306', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18696, 'ALAGOINHAS', '2900702', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18697, 'APORA', '2901908', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18698, 'ARACAS', '2902054', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18699, 'ARAMARI', '2902203', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18700, 'CRISOPOLIS', '2909604', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18701, 'INHAMBUPE', '2913705', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18702, 'RIO REAL', '2927002', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18703, 'SATIRO DIAS', '2929701', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18704, 'CARDEAL DA SILVA', '2907004', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18705, 'CONDE', '2908606', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18706, 'ENTRE RIOS', '2910503', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18707, 'ESPLANADA', '2910602', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18708, 'JANDAIRA', '2917904', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18709, 'AMELIA RODRIGUES', '2901106', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18710, 'CATU', '2907509', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18711, 'ITANAGRA', '2915908', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18712, 'MATA DE SAO JOAO', '2921005', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18713, 'POJUCA', '2925204', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18714, 'SAO SEBASTIAO DO PASSE', '2929503', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18715, 'TERRA NOVA', '2931707', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18716, 'ARATUIPE', '2902302', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18717, 'CABACEIRAS DO PARAGUACU', '2904852', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18718, 'CACHOEIRA', '2904902', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18719, 'CASTRO ALVES', '2907301', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18720, 'CONCEICAO DO ALMEIDA', '2908309', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18721, 'CRUZ DAS ALMAS', '2909802', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18722, 'DOM MACEDO COSTA', '2910206', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18723, 'GOVERNADOR MANGABEIRA', '2911600', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18724, 'JAGUARIPE', '2917805', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18725, 'MARAGOGIPE', '2920601', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18726, 'MUNIZ FERREIRA', '2922201', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18727, 'MURITIBA', '2922300', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18728, 'NAZARE', '2922508', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18729, 'SALINAS DA MARGARIDA', '2927309', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18730, 'SANTO AMARO', '2928604', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18731, 'SANTO ANTONIO DE JESUS', '2928703', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18732, 'SAO FELIX', '2929008', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18733, 'SAO FELIPE', '2929107', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18734, 'SAPEACU', '2929602', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18735, 'SAUBARA', '2929750', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18736, 'VARZEDO', '2933174', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18737, 'CAMACARI', '2905701', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18738, 'CANDEIAS', '2906501', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18739, 'DIAS D AVILA', '2910057', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18740, 'ITAPARICA', '2916104', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18741, 'LAURO DE FREITAS', '2919207', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18742, 'MADRE DE DEUS', '2919926', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18743, 'SALVADOR', '2927408', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18744, 'SAO FRANCISCO DO CONDE', '2929206', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18745, 'SIMOES FILHO', '2930709', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18746, 'VERA CRUZ', '2933208', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18747, 'BOQUIRA', '2904100', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18748, 'BOTUPORA', '2904209', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18749, 'BROTAS DE MACAUBAS', '2904506', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18750, 'CATURAMA', '2907558', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18751, 'IBIPITANGA', '2912509', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18752, 'IBITIARA', '2913002', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18753, 'IPUPIARA', '2914109', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18754, 'MACAUBAS', '2919801', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18755, 'NOVO HORIZONTE', '2923035', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18756, 'OLIVEIRA DOS BREJINHOS', '2923209', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18757, 'TANQUE NOVO', '2931053', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18758, 'ABAIRA', '2900108', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18759, 'ANDARAI', '2901304', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18760, 'BARRA DA ESTIVA', '2902807', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18761, 'BONINAL', '2904001', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18762, 'BONITO', '2904050', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18763, 'CONTENDAS DO SINCORA', '2908804', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18764, 'IBICOARA', '2912202', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18765, 'ITAETE', '2915007', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18766, 'JUSSIAPE', '2918605', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18767, 'LENCOIS', '2919306', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18768, 'MUCUGE', '2921906', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18769, 'NOVA REDENCAO', '2922854', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18770, 'PALMEIRAS', '2923506', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18771, 'PIATA', '2924306', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18772, 'RIO DE CONTAS', '2926707', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18773, 'SEABRA', '2929909', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18774, 'UTINGA', '2932804', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18775, 'WAGNER', '2933406', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18776, 'AIQUARA', '2900603', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18777, 'AMARGOSA', '2901007', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18778, 'APUAREMA', '2901957', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18779, 'BREJOES', '2904308', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18780, 'CRAVOLANDIA', '2909505', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18781, 'IRAJUBA', '2914208', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18782, 'IRAMAIA', '2914307', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18783, 'ITAGI', '2915106', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18784, 'ITAQUARA', '2916708', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18785, 'ITIRUCU', '2916906', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18786, 'JAGUAQUARA', '2917607', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18787, 'JEQUIE', '2918001', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18788, 'JIQUIRICA', '2918209', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18789, 'JITAUNA', '2918308', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18790, 'LAFAIETE COUTINHO', '2918704', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18791, 'LAJE', '2918803', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18792, 'LAJEDO DO TABOCAL', '2919058', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18793, 'MARACAS', '2920502', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18794, 'MARCIONILIO SOUZA', '2920809', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18795, 'MILAGRES', '2921302', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18796, 'MUTUIPE', '2922409', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18797, 'NOVA ITARANA', '2922805', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18798, 'PLANALTINO', '2924900', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18799, 'SANTA INES', '2927903', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18800, 'SAO MIGUEL DAS MATAS', '2929404', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18801, 'UBAIRA', '2932101', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18802, 'ERICO CARDOSO', '2900504', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18803, 'DOM BASILIO', '2910107', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18804, 'LIVRAMENTO DE NOSSA SENHORA', '2919504', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18805, 'PARAMIRIM', '2923605', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18806, 'RIO DO PIRES', '2926905', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18807, 'CACULE', '2905008', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18808, 'CAETITE', '2905206', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18809, 'CANDIBA', '2906600', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18810, 'GUANAMBI', '2911709', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18811, 'IBIASSUCE', '2912004', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18812, 'IGAPORA', '2913408', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18813, 'IUIU', '2917334', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18814, 'JACARACI', '2917409', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18815, 'LAGOA REAL', '2918753', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18816, 'LICINIO DE ALMEIDA', '2919405', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18817, 'MALHADA', '2920205', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18818, 'MATINA', '2921054', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18819, 'MORTUGABA', '2921807', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18820, 'PALMAS DE MONTE ALTO', '2923407', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18821, 'PINDAI', '2924504', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18822, 'RIACHO DE SANTANA', '2926400', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18823, 'SEBASTIAO LARANJEIRAS', '2930006', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18824, 'URANDI', '2932606', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18825, 'ARACATU', '2902005', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18826, 'BRUMADO', '2904605', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18827, 'CARAIBAS', '2906899', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18828, 'CONDEUBA', '2908705', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18829, 'CORDEIROS', '2909000', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18830, 'GUAJERU', '2911659', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18831, 'ITUACU', '2917201', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18832, 'MAETINGA', '2919959', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18833, 'MALHADA DE PEDRAS', '2920304', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18834, 'PIRIPA', '2924702', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18835, 'PRESIDENTE JANIO QUADROS', '2925709', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18836, 'RIO DO ANTONIO', '2926806', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18837, 'TANHACU', '2931004', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18838, 'TREMEDAL', '2931806', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18839, 'ANAGE', '2901205', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18840, 'BARRA DO CHOCA', '2902906', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18841, 'BELO CAMPO', '2903508', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18842, 'BOA NOVA', '2903706', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18843, 'BOM JESUS DA SERRA', '2903953', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18844, 'CAATIBA', '2904803', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18845, 'CAETANOS', '2905156', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18846, 'CANDIDO SALES', '2906709', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18847, 'DARIO MEIRA', '2910008', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18848, 'IBICUI', '2912301', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18849, 'IGUAI', '2913507', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18850, 'MANOEL VITORINO', '2920403', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18851, 'MIRANTE', '2921450', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18852, 'NOVA CANAA', '2922706', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18853, 'PLANALTO', '2925006', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18854, 'POCOES', '2925105', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18855, 'VITORIA DA CONQUISTA', '2933307', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18856, 'ENCRUZILHADA', '2910404', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18857, 'ITAMBE', '2915809', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18858, 'ITAPETINGA', '2916401', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18859, 'ITARANTIM', '2916807', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18860, 'ITORORO', '2917102', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18861, 'MACARANI', '2919702', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18862, 'MAIQUINIQUE', '2920007', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18863, 'POTIRAGUA', '2925402', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18864, 'RIBEIRAO DO LARGO', '2926657', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18865, 'CAIRU', '2905404', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18866, 'CAMAMU', '2905800', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18867, 'IGRAPIUNA', '2913457', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18868, 'ITUBERA', '2917300', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18869, 'MARAU', '2920700', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18870, 'NILO PECANHA', '2922607', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18871, 'PIRAI DO NORTE', '2924678', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18872, 'PRESIDENTE TANCREDO NEVES', '2925758', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18873, 'TAPEROA', '2931202', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18874, 'VALENCA', '2932903', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18875, 'ALMADINA', '2900900', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18876, 'ARATACA', '2902252', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18877, 'AURELINO LEAL', '2902401', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18878, 'BARRA DO ROCHA', '2903102', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18879, 'BARRO PRETO', '2903300', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18880, 'BELMONTE', '2903409', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18881, 'BUERAREMA', '2904704', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18882, 'CAMACAN', '2905602', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18883, 'CANAVIEIRAS', '2906303', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18884, 'COARACI', '2908002', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18885, 'FIRMINO ALVES', '2910909', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18886, 'FLORESTA AZUL', '2911006', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18887, 'GANDU', '2911204', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18888, 'GONGOGI', '2911501', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18889, 'IBICARAI', '2912103', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18890, 'IBIRAPITANGA', '2912707', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18891, 'IBIRATAIA', '2912905', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18892, 'ILHEUS', '2913606', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18893, 'IPIAU', '2913903', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18894, 'ITABUNA', '2914802', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18895, 'ITACARE', '2914901', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18896, 'ITAGIBA', '2915205', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18897, 'ITAJU DO COLONIA', '2915403', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18898, 'ITAJUIPE', '2915502', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18899, 'ITAMARI', '2915700', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18900, 'ITAPE', '2916203', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18901, 'ITAPEBI', '2916302', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18902, 'ITAPITANGA', '2916609', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18903, 'JUSSARI', '2918555', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18904, 'MASCOTE', '2920908', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18905, 'NOVA IBIA', '2922755', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18906, 'PAU BRASIL', '2923902', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18907, 'SANTA CRUZ DA VITORIA', '2927804', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18908, 'SANTA LUZIA', '2928059', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18909, 'SAO JOSE DA VITORIA', '2929354', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18910, 'TEOLANDIA', '2931608', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18911, 'UBAITABA', '2932200', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18912, 'UBATA', '2932309', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18913, 'UNA', '2932507', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18914, 'URUCUCA', '2932705', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18915, 'WENCESLAU GUIMARAES', '2933505', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18916, 'ALCOBACA', '2900801', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18917, 'CARAVELAS', '2906907', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18918, 'EUNAPOLIS', '2910727', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18919, 'GUARATINGA', '2911808', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18920, 'IBIRAPUA', '2912806', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18921, 'ITABELA', '2914653', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18922, 'ITAGIMIRIM', '2915304', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18923, 'ITAMARAJU', '2915601', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18924, 'ITANHEM', '2916005', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18925, 'JUCURUCU', '2918456', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18926, 'LAJEDAO', '2918902', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18927, 'MEDEIROS NETO', '2921104', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18928, 'MUCURI', '2922003', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18929, 'NOVA VICOSA', '2923001', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18930, 'PORTO SEGURO', '2925303', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18931, 'PRADO', '2925501', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18932, 'SANTA CRUZ CABRALIA', '2927705', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18933, 'TEIXEIRA DE FREITAS', '2931350', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18934, 'VEREDA', '2933257', 29);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18935, 'ARINOS', '3104502', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18936, 'BONFINOPOLIS DE MINAS', '3108206', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18937, 'BURITIS', '3109303', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18938, 'CABECEIRA GRANDE', '3109451', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18939, 'DOM BOSCO', '3122470', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18940, 'FORMOSO', '3126208', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18941, 'NATALANDIA', '3144375', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18942, 'UNAI', '3170404', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18943, 'URUANA DE MINAS', '3170479', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18944, 'BRASILANDIA DE MINAS', '3108552', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18945, 'GUARDA-MOR', '3128600', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18946, 'JOAO PINHEIRO', '3136306', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18947, 'LAGAMAR', '3137106', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18948, 'LAGOA GRANDE', '3137536', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18949, 'PARACATU', '3147006', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18950, 'PRESIDENTE OLEGARIO', '3153400', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18951, 'SAO GONCALO DO ABAETE', '3161700', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18952, 'VARJAO DE MINAS', '3170750', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18953, 'VAZANTE', '3171006', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18954, 'BONITO DE MINAS', '3108255', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18955, 'CHAPADA GAUCHA', '3116159', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18956, 'CONEGO MARINHO', '3117836', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18957, 'ICARAI DE MINAS', '3130051', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18958, 'ITACARAMBI', '3132107', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18959, 'JANUARIA', '3135209', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18960, 'JUVENILIA', '3136959', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18961, 'MANGA', '3139300', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18962, 'MATIAS CARDOSO', '3140852', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18963, 'MIRAVANIA', '3142254', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18964, 'MONTALVANIA', '3142700', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18965, 'PEDRAS DE MARIA DA CRUZ', '3149150', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18966, 'PINTOPOLIS', '3150570', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18967, 'SAO FRANCISCO', '3161106', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18968, 'SAO JOAO DAS MISSOES', '3162450', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18969, 'URUCUIA', '3170529', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18970, 'CATUTI', '3115474', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18971, 'ESPINOSA', '3124302', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18972, 'GAMELEIRAS', '3127339', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18973, 'JAIBA', '3135050', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18974, 'JANAUBA', '3135100', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18975, 'MAMONAS', '3139250', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18976, 'MATO VERDE', '3141009', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18977, 'MONTE AZUL', '3142908', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18978, 'NOVA PORTEIRINHA', '3145059', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18979, 'PAI PEDRO', '3146552', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18980, 'PORTEIRINHA', '3152204', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18981, 'RIACHO DOS MACHADOS', '3154507', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18982, 'SERRANOPOLIS DE MINAS', '3166956', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18983, 'AGUAS VERMELHAS', '3101003', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18984, 'BERIZAL', '3106655', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18985, 'CURRAL DE DENTRO', '3120870', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18986, 'DIVISA ALEGRE', '3122355', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18987, 'FRUTA DE LEITE', '3127073', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18988, 'INDAIABIRA', '3130655', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18989, 'MONTEZUMA', '3143450', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18990, 'NINHEIRA', '3144656', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18991, 'NOVORIZONTE', '3145372', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18992, 'RIO PARDO DE MINAS', '3155603', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18993, 'RUBELITA', '3156502', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18994, 'SALINAS', '3157005', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18995, 'SANTA CRUZ DE SALINAS', '3157377', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18996, 'SANTO ANTONIO DO RETIRO', '3160454', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18997, 'SAO JOAO DO PARAISO', '3162708', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18998, 'TAIOBEIRAS', '3168002', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (18999, 'VARGEM GRANDE DO RIO PARDO', '3170651', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19000, 'BURITIZEIRO', '3109402', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19001, 'IBIAI', '3129608', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19002, 'JEQUITAI', '3135605', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19003, 'LAGOA DOS PATOS', '3137304', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19004, 'LASSANCE', '3138104', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19005, 'PIRAPORA', '3151206', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19006, 'RIACHINHO', '3154457', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19007, 'SANTA FE DE MINAS', '3157609', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19008, 'SAO ROMAO', '3164209', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19009, 'VARZEA DA PALMA', '3170800', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19010, 'BRASILIA DE MINAS', '3108602', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19011, 'CAMPO AZUL', '3111150', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19012, 'CAPITAO ENEAS', '3112703', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19013, 'CLARO DOS POCOES', '3116506', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19014, 'CORACAO DE JESUS', '3118809', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19015, 'FRANCISCO SA', '3126703', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19016, 'GLAUCILANDIA', '3127354', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19017, 'IBIRACATU', '3129657', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19018, 'JAPONVAR', '3135357', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19019, 'JURAMENTO', '3136801', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19020, 'LONTRA', '3138658', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19021, 'LUISLANDIA', '3138682', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19022, 'MIRABELA', '3142007', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19023, 'MONTES CLAROS', '3143302', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19024, 'PATIS', '3147956', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19025, 'PONTO CHIQUE', '3152131', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19026, 'SAO JOAO DA LAGOA', '3162252', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19027, 'SAO JOAO DA PONTE', '3162401', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19028, 'SAO JOAO DO PACUI', '3162658', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19029, 'UBAI', '3170008', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19030, 'VARZELANDIA', '3170909', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19031, 'VERDELANDIA', '3171030', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19032, 'BOTUMIRIM', '3108503', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19033, 'CRISTALIA', '3120300', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19034, 'GRAO MOGOL', '3127800', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19035, 'ITACAMBIRA', '3132008', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19036, 'JOSENOPOLIS', '3136579', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19037, 'PADRE CARVALHO', '3146255', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19038, 'BOCAIUVA', '3107307', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19039, 'ENGENHEIRO NAVARRO', '3123809', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19040, 'FRANCISCO DUMONT', '3126604', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19041, 'GUARACIAMA', '3128253', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19042, 'OLHOS-D AGUA', '3145455', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19043, 'COUTO DE MAGALHAES DE MINAS', '3120102', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19044, 'DATAS', '3121001', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19045, 'DIAMANTINA', '3121605', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19046, 'FELICIO DOS SANTOS', '3125408', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19047, 'SAO GONCALO DO RIO PRETO', '3125507', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19048, 'GOUVEIA', '3127602', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19049, 'PRESIDENTE KUBITSCHEK', '3153301', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19050, 'SENADOR MODESTINO GONCALVES', '3165909', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19051, 'ANGELANDIA', '3102852', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19052, 'ARICANDUVA', '3104452', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19053, 'BERILO', '3106507', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19054, 'CAPELINHA', '3112307', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19055, 'CARBONITA', '3113503', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19056, 'CHAPADA DO NORTE', '3116100', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19057, 'FRANCISCO BADARO', '3126505', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19058, 'ITAMARANDIBA', '3132503', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19059, 'JENIPAPO DE MINAS', '3135456', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19060, 'JOSE GONCALVES DE MINAS', '3136520', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19061, 'LEME DO PRADO', '3138351', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19062, 'MINAS NOVAS', '3141801', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19063, 'TURMALINA', '3169703', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19064, 'VEREDINHA', '3171071', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19065, 'ARACUAI', '3103405', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19066, 'CARAI', '3113008', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19067, 'CORONEL MURTA', '3119500', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19068, 'ITINGA', '3134004', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19069, 'NOVO CRUZEIRO', '3145307', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19070, 'PADRE PARAISO', '3146305', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19071, 'PONTO DOS VOLANTES', '3152170', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19072, 'VIRGEM DA LAPA', '3171600', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19073, 'CACHOEIRA DE PAJEU', '3102704', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19074, 'COMERCINHO', '3117009', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19075, 'ITAOBIM', '3133303', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19076, 'MEDINA', '3141405', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19077, 'PEDRA AZUL', '3148707', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19078, 'ALMENARA', '3101706', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19079, 'BANDEIRA', '3105202', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19080, 'DIVISOPOLIS', '3122454', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19081, 'FELISBURGO', '3125606', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19082, 'JACINTO', '3134707', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19083, 'JEQUITINHONHA', '3135803', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19084, 'JOAIMA', '3136009', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19085, 'JORDANIA', '3136504', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19086, 'MATA VERDE', '3140555', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19087, 'MONTE FORMOSO', '3143153', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19088, 'PALMOPOLIS', '3146750', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19089, 'RIO DO PRADO', '3155108', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19090, 'RUBIM', '3156601', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19091, 'SALTO DA DIVISA', '3157104', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19092, 'SANTA MARIA DO SALTO', '3158102', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19093, 'SANTO ANTONIO DO JACINTO', '3160306', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19094, 'ATALEIA', '3104700', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19095, 'CATUJI', '3115458', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19096, 'FRANCISCOPOLIS', '3126752', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19097, 'FREI GASPAR', '3126802', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19098, 'ITAIPE', '3132305', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19099, 'LADAINHA', '3137007', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19100, 'MALACACHETA', '3139201', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19101, 'NOVO ORIENTE DE MINAS', '3145356', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19102, 'OURO VERDE DE MINAS', '3146206', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19103, 'PAVAO', '3148509', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19104, 'POTE', '3152402', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19105, 'SETUBINHA', '3165552', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19106, 'TEOFILO OTONI', '3168606', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19107, 'AGUAS FORMOSAS', '3100906', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19108, 'BERTOPOLIS', '3106606', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19109, 'CARLOS CHAGAS', '3113701', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19110, 'CRISOLITA', '3120151', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19111, 'FRONTEIRA DOS VALES', '3127057', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19112, 'MACHACALIS', '3138906', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19113, 'NANUQUE', '3144300', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19114, 'SANTA HELENA DE MINAS', '3157658', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19115, 'SERRA DOS AIMORES', '3166709', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19116, 'UMBURATIBA', '3170305', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19117, 'CACHOEIRA DOURADA', '3109808', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19118, 'CAPINOPOLIS', '3112604', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19119, 'GURINHATA', '3129103', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19120, 'IPIACU', '3131406', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19121, 'ITUIUTABA', '3134202', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19122, 'SANTA VITORIA', '3159803', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19123, 'ARAGUARI', '3103504', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19124, 'ARAPORA', '3103751', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19125, 'CANAPOLIS', '3111804', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19126, 'CASCALHO RICO', '3115003', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19127, 'CENTRALINA', '3115805', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19128, 'INDIANOPOLIS', '3130705', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19129, 'MONTE ALEGRE DE MINAS', '3142809', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19130, 'PRATA', '3152808', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19131, 'TUPACIGUARA', '3169604', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19132, 'UBERLANDIA', '3170206', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19133, 'ABADIA DOS DOURADOS', '3100104', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19134, 'COROMANDEL', '3119302', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19135, 'CRUZEIRO DA FORTALEZA', '3120706', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19136, 'DOURADOQUARA', '3123502', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19137, 'ESTRELA DO SUL', '3124807', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19138, 'GRUPIARA', '3127909', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19139, 'IRAI DE MINAS', '3131604', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19140, 'MONTE CARMELO', '3143104', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19141, 'PATROCINIO', '3148103', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19142, 'ROMARIA', '3156403', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19143, 'SERRA DO SALITRE', '3166808', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19144, 'ARAPUA', '3103801', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19145, 'CARMO DO PARANAIBA', '3114303', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19146, 'GUIMARANIA', '3128907', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19147, 'LAGOA FORMOSA', '3137502', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19148, 'MATUTINA', '3141207', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19149, 'PATOS DE MINAS', '3148004', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19150, 'RIO PARANAIBA', '3155504', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19151, 'SANTA ROSA DA SERRA', '3159704', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19152, 'SAO GOTARDO', '3162104', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19153, 'TIROS', '3168903', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19154, 'CAMPINA VERDE', '3111101', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19155, 'CARNEIRINHO', '3114550', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19156, 'COMENDADOR GOMES', '3116902', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19157, 'FRONTEIRA', '3127008', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19158, 'FRUTAL', '3127107', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19159, 'ITAPAGIPE', '3133402', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19160, 'ITURAMA', '3134400', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19161, 'LIMEIRA DO OESTE', '3138625', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19162, 'PIRAJUBA', '3150703', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19163, 'PLANURA', '3151602', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19164, 'SAO FRANCISCO DE SALES', '3161304', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19165, 'UNIAO DE MINAS', '3170438', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19166, 'AGUA COMPRIDA', '3100708', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19167, 'CAMPO FLORIDO', '3111408', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19168, 'CONCEICAO DAS ALAGOAS', '3117306', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19169, 'CONQUISTA', '3118205', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19170, 'DELTA', '3121258', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19171, 'UBERABA', '3170107', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19172, 'VERISSIMO', '3171105', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19173, 'ARAXA', '3104007', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19174, 'CAMPOS ALTOS', '3111507', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19175, 'IBIA', '3129509', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19176, 'NOVA PONTE', '3145000', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19177, 'PEDRINOPOLIS', '3149200', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19178, 'PERDIZES', '3149804', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19179, 'PRATINHA', '3153004', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19180, 'SACRAMENTO', '3156908', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19181, 'SANTA JULIANA', '3157708', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19182, 'TAPIRA', '3168101', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19183, 'ABAETE', '3100203', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19184, 'BIQUINHAS', '3107000', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19185, 'CEDRO DO ABAETE', '3115607', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19186, 'MORADA NOVA DE MINAS', '3143500', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19187, 'PAINEIRAS', '3146404', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19188, 'POMPEU', '3152006', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19189, 'TRES MARIAS', '3169356', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19190, 'AUGUSTO DE LIMA', '3104809', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19191, 'BUENOPOLIS', '3109204', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19192, 'CORINTO', '3119104', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19193, 'CURVELO', '3120904', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19194, 'FELIXLANDIA', '3125705', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19195, 'INIMUTABA', '3131109', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19196, 'JOAQUIM FELICIO', '3136405', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19197, 'MONJOLOS', '3142502', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19198, 'MORRO DA GARCA', '3143609', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19199, 'PRESIDENTE JUSCELINO', '3153202', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19200, 'SANTO HIPOLITO', '3160603', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19201, 'ARAUJOS', '3103900', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19202, 'BOM DESPACHO', '3107406', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19203, 'DORES DO INDAIA', '3123205', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19204, 'ESTRELA DO INDAIA', '3124708', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19205, 'JAPARAIBA', '3135308', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19206, 'LAGOA DA PRATA', '3137205', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19207, 'LEANDRO FERREIRA', '3138302', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19208, 'LUZ', '3138807', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19209, 'MARTINHO CAMPOS', '3140506', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19210, 'MOEMA', '3142403', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19211, 'QUARTEL GERAL', '3153707', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19212, 'SERRA DA SAUDADE', '3166600', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19213, 'ARACAI', '3103207', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19214, 'BALDIM', '3105004', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19215, 'CACHOEIRA DA PRATA', '3109600', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19216, 'CAETANOPOLIS', '3109907', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19217, 'CAPIM BRANCO', '3112505', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19218, 'CORDISBURGO', '3118908', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19219, 'FORTUNA DE MINAS', '3126406', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19220, 'FUNILANDIA', '3127206', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19221, 'INHAUMA', '3131000', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19222, 'JABOTICATUBAS', '3134608', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19223, 'JEQUITIBA', '3135704', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19224, 'MARAVILHAS', '3139706', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19225, 'MATOZINHOS', '3141108', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19226, 'PAPAGAIOS', '3146909', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19227, 'PARAOPEBA', '3147402', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19228, 'PEQUI', '3149606', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19229, 'PRUDENTE DE MORAIS', '3153608', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19230, 'SANTANA DE PIRAPAMA', '3158508', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19231, 'SANTANA DO RIACHO', '3159001', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19232, 'SETE LAGOAS', '3167202', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19233, 'ALVORADA DE MINAS', '3102407', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19234, 'CONCEICAO DO MATO DENTRO', '3117504', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19235, 'CONGONHAS DO NORTE', '3118106', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19236, 'DOM JOAQUIM', '3122603', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19237, 'ITAMBE DO MATO DENTRO', '3132800', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19238, 'MORRO DO PILAR', '3143708', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19239, 'PASSABEM', '3147501', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19240, 'RIO VERMELHO', '3156007', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19241, 'SANTO ANTONIO DO ITAMBE', '3160207', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19242, 'SANTO ANTONIO DO RIO ABAIXO', '3160504', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19243, 'SAO SEBASTIAO DO RIO PRETO', '3164803', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19244, 'SERRA AZUL DE MINAS', '3166501', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19245, 'SERRO', '3167103', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19246, 'FLORESTAL', '3126000', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19247, 'ONCA DE PITANGUI', '3145802', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19248, 'PARA DE MINAS', '3147105', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19249, 'PITANGUI', '3151404', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19250, 'SAO JOSE DA VARGINHA', '3163102', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19251, 'BELO HORIZONTE', '3106200', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19252, 'BETIM', '3106705', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19253, 'BRUMADINHO', '3109006', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19254, 'CAETE', '3110004', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19255, 'CONFINS', '3117876', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19256, 'CONTAGEM', '3118601', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19257, 'ESMERALDAS', '3124104', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19258, 'IBIRITE', '3129806', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19259, 'IGARAPE', '3130101', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19260, 'JUATUBA', '3136652', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19261, 'LAGOA SANTA', '3137601', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19262, 'MARIO CAMPOS', '3140159', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19263, 'MATEUS LEME', '3140704', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19264, 'NOVA LIMA', '3144805', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19265, 'PEDRO LEOPOLDO', '3149309', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19266, 'RAPOSOS', '3153905', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19267, 'RIBEIRAO DAS NEVES', '3154606', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19268, 'RIO ACIMA', '3154804', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19269, 'SABARA', '3156700', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19270, 'SANTA LUZIA', '3157807', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19271, 'SAO JOAQUIM DE BICAS', '3162922', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19272, 'SAO JOSE DA LAPA', '3162955', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19273, 'SARZEDO', '3165537', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19274, 'VESPASIANO', '3171204', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19275, 'ALVINOPOLIS', '3102308', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19276, 'BARAO DE COCAIS', '3105400', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19277, 'BELA VISTA DE MINAS', '3106002', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19278, 'BOM JESUS DO AMPARO', '3107703', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19279, 'CATAS ALTAS', '3115359', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19280, 'DIONISIO', '3121803', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19281, 'FERROS', '3125903', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19283, 'JOAO MONLEVADE', '3136207', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19284, 'NOVA UNIAO', '3136603', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19285, 'NOVA ERA', '3144706', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19286, 'RIO PIRACICABA', '3155702', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19287, 'SANTA BARBARA', '3157203', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19288, 'SANTA MARIA DE ITABIRA', '3158003', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19289, 'SAO DOMINGOS DO PRATA', '3161007', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19290, 'SAO GONCALO DO RIO ABAIXO', '3161908', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19291, 'SAO JOSE DO GOIABAL', '3163409', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19292, 'TAQUARACU DE MINAS', '3168309', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19293, 'BELO VALE', '3106408', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19294, 'BONFIM', '3108107', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19295, 'CRUCILANDIA', '3120607', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19296, 'ITAGUARA', '3132206', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19297, 'ITATIAIUCU', '3133709', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19298, 'JECEABA', '3135407', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19299, 'MOEDA', '3142304', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19300, 'PIEDADE DOS GERAIS', '3150406', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19301, 'RIO MANSO', '3155306', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19302, 'DIOGO DE VASCONCELOS', '3121704', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19303, 'ITABIRITO', '3131901', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19304, 'MARIANA', '3140001', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19305, 'OURO PRETO', '3146107', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19306, 'CASA GRANDE', '3114907', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19307, 'CATAS ALTAS DA NORUEGA', '3115409', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19308, 'CONGONHAS', '3118007', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19309, 'CONSELHEIRO LAFAIETE', '3118304', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19310, 'CRISTIANO OTONI', '3120409', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19311, 'DESTERRO DE ENTRE RIOS', '3121407', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19312, 'ENTRE RIOS DE MINAS', '3123908', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19313, 'ITAVERAVA', '3133907', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19314, 'OURO BRANCO', '3145901', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19315, 'QUELUZITO', '3153806', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19316, 'SANTANA DOS MONTES', '3159100', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19317, 'SAO BRAS DO SUACUI', '3160900', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19318, 'BRAUNAS', '3108800', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19319, 'CARMESIA', '3113800', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19320, 'COLUNA', '3116803', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19321, 'DIVINOLANDIA DE MINAS', '3122207', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19322, 'DORES DE GUANHAES', '3123106', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19323, 'GONZAGA', '3127503', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19324, 'GUANHAES', '3128006', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19325, 'MATERLANDIA', '3140605', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19326, 'PAULISTAS', '3148400', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19327, 'SABINOPOLIS', '3156809', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19328, 'SANTA EFIGENIA DE MINAS', '3157500', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19329, 'SAO JOAO EVANGELISTA', '3162807', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19330, 'SARDOA', '3165503', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19331, 'SENHORA DO PORTO', '3166105', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19332, 'VIRGINOPOLIS', '3171808', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19333, 'AGUA BOA', '3100609', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19334, 'CANTAGALO', '3112059', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19335, 'FREI LAGONEGRO', '3126950', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19336, 'JOSE RAYDAN', '3136553', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19337, 'PECANHA', '3148608', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19338, 'SANTA MARIA DO SUACUI', '3158201', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19339, 'SAO JOSE DO JACURI', '3163508', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19340, 'SAO PEDRO DO SUACUI', '3164100', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19341, 'SAO SEBASTIAO DO MARANHAO', '3164506', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19342, 'ALPERCATA', '3101805', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19343, 'CAMPANARIO', '3110806', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19344, 'CAPITAO ANDRADE', '3112653', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19345, 'COROACI', '3119203', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19346, 'DIVINO DAS LARANJEIRAS', '3122108', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19347, 'ENGENHEIRO CALDAS', '3123700', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19348, 'FERNANDES TOURINHO', '3125804', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19349, 'FREI INOCENCIO', '3126901', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19350, 'GALILEIA', '3127305', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19351, 'GOVERNADOR VALADARES', '3127701', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19352, 'ITAMBACURI', '3132701', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19353, 'ITANHOMI', '3133204', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19354, 'JAMPRUCA', '3135076', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19355, 'MARILAC', '3140100', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19356, 'NACIP RAYDAN', '3144201', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19357, 'NOVA MODICA', '3144904', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19358, 'PESCADOR', '3150000', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19359, 'SAO GERALDO DA PIEDADE', '3161601', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19360, 'SAO GERALDO DO BAIXIO', '3161650', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19361, 'SAO JOSE DA SAFIRA', '3163003', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19362, 'SAO JOSE DO DIVINO', '3163300', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19363, 'SOBRALIA', '3167707', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19364, 'TUMIRITINGA', '3169505', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19365, 'MATHIAS LOBATO', '3171501', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19366, 'VIRGOLANDIA', '3171907', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19367, 'CENTRAL DE MINAS', '3115706', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19368, 'ITABIRINHA', '3131802', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19369, 'MANTENA', '3139607', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19370, 'MENDES PIMENTEL', '3141504', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19371, 'NOVA BELEM', '3144672', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19372, 'SAO FELIX DE MINAS', '3161056', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19373, 'SAO JOAO DO MANTENINHA', '3162575', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19374, 'ACUCENA', '3100500', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19375, 'ANTONIO DIAS', '3103009', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19376, 'BELO ORIENTE', '3106309', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19377, 'CORONEL FABRICIANO', '3119401', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19378, 'IPATINGA', '3131307', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19379, 'JAGUARACU', '3135001', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19380, 'JOANESIA', '3136108', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19381, 'MARLIERIA', '3140308', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19382, 'MESQUITA', '3141702', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19383, 'NAQUE', '3144359', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19384, 'PERIQUITO', '3149952', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19385, 'SANTANA DO PARAISO', '3158953', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19386, 'TIMOTEO', '3168705', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19387, 'BOM JESUS DO GALHO', '3107802', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19388, 'BUGRE', '3109253', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19389, 'CARATINGA', '3113404', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19390, 'CORREGO NOVO', '3120003', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19391, 'DOM CAVATI', '3122504', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19392, 'ENTRE FOLHAS', '3123858', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19393, 'IAPU', '3129301', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19394, 'IMBE DE MINAS', '3130556', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19395, 'INHAPIM', '3130903', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19396, 'IPABA', '3131158', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19397, 'PIEDADE DE CARATINGA', '3150158', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19398, 'PINGO-D AGUA', '3150539', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19399, 'SANTA BARBARA DO LESTE', '3157252', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19400, 'SANTA RITA DE MINAS', '3159357', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19401, 'SAO DOMINGOS DAS DORES', '3160959', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19402, 'SAO JOAO DO ORIENTE', '3162609', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19403, 'SAO SEBASTIAO DO ANTA', '3164472', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19404, 'TARUMIRIM', '3168408', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19405, 'UBAPORANGA', '3170057', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19406, 'VARGEM ALEGRE', '3170578', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19407, 'AIMORES', '3101102', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19408, 'ALVARENGA', '3102209', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19409, 'CONCEICAO DE IPANEMA', '3117405', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19410, 'CONSELHEIRO PENA', '3118403', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19411, 'CUPARAQUE', '3120839', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19412, 'GOIABEIRA', '3127370', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19413, 'IPANEMA', '3131208', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19414, 'ITUETA', '3134103', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19415, 'MUTUM', '3144003', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19416, 'POCRANE', '3151909', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19417, 'RESPLENDOR', '3154309', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19418, 'SANTA RITA DO ITUETO', '3159506', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19419, 'TAPARUBA', '3168051', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19420, 'BAMBUI', '3105103', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19421, 'CORREGO DANTA', '3119807', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19422, 'DORESOPOLIS', '3123403', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19423, 'IGUATAMA', '3130309', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19424, 'MEDEIROS', '3141306', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19425, 'PIUMHI', '3151503', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19426, 'SAO ROQUE DE MINAS', '3164308', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19427, 'TAPIRAI', '3168200', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19428, 'VARGEM BONITA', '3170602', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19429, 'CARMO DO CAJURU', '3114204', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19430, 'CLAUDIO', '3116605', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19431, 'CONCEICAO DO PARA', '3117603', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19432, 'DIVINOPOLIS', '3122306', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19433, 'IGARATINGA', '3130200', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19434, 'ITAUNA', '3133808', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19435, 'NOVA SERRANA', '3145208', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19436, 'PERDIGAO', '3149705', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19437, 'SANTO ANTONIO DO MONTE', '3160405', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19438, 'SAO GONCALO DO PARA', '3161809', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19439, 'SAO SEBASTIAO DO OESTE', '3164605', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19440, 'ARCOS', '3104205', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19441, 'CAMACHO', '3110400', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19442, 'CORREGO FUNDO', '3119955', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19443, 'FORMIGA', '3126109', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19444, 'ITAPECERICA', '3133501', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19445, 'PAINS', '3146503', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19446, 'PEDRA DO INDAIA', '3148905', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19447, 'PIMENTA', '3150505', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19448, 'AGUANIL', '3100807', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19449, 'CAMPO BELO', '3111200', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19450, 'CANA VERDE', '3111903', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19451, 'CANDEIAS', '3112000', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19452, 'CRISTAIS', '3120201', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19453, 'PERDOES', '3149903', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19454, 'SANTANA DO JACARE', '3158805', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19455, 'BOM SUCESSO', '3108008', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19456, 'CARMO DA MATA', '3114006', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19457, 'CARMOPOLIS DE MINAS', '3114501', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19458, 'IBITURUNA', '3130002', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19459, 'OLIVEIRA', '3145604', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19460, 'PASSA TEMPO', '3147709', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19461, 'PIRACEMA', '3150604', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19462, 'SANTO ANTONIO DO AMPARO', '3159902', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19463, 'SAO FRANCISCO DE PAULA', '3161205', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19464, 'ALPINOPOLIS', '3101904', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19465, 'BOM JESUS DA PENHA', '3107604', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19466, 'CAPETINGA', '3112406', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19467, 'CAPITOLIO', '3112802', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19468, 'CASSIA', '3115102', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19469, 'CLARAVAL', '3116407', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19470, 'DELFINOPOLIS', '3121209', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19471, 'FORTALEZA DE MINAS', '3126307', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19472, 'IBIRACI', '3129707', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19473, 'ITAU DE MINAS', '3133758', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19474, 'PASSOS', '3147907', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19475, 'PRATAPOLIS', '3152907', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19476, 'SAO JOAO BATISTA DO GLORIA', '3162203', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19477, 'SAO JOSE DA BARRA', '3162948', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19478, 'ARCEBURGO', '3104106', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19479, 'CABO VERDE', '3109501', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19480, 'GUARANESIA', '3128303', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19481, 'GUAXUPE', '3128709', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19482, 'ITAMOGI', '3132909', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19483, 'JACUI', '3134806', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19484, 'JURUAIA', '3136900', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19485, 'MONTE BELO', '3143005', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19486, 'MONTE SANTO DE MINAS', '3143203', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19487, 'MUZAMBINHO', '3144102', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19488, 'NOVA RESENDE', '3145109', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19489, 'SAO PEDRO DA UNIAO', '3163904', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19490, 'SAO SEBASTIAO DO PARAISO', '3164704', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19491, 'SAO TOMAS DE AQUINO', '3165107', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19492, 'ALFENAS', '3101607', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19493, 'ALTEROSA', '3102001', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19494, 'AREADO', '3104304', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19495, 'CARMO DO RIO CLARO', '3114402', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19496, 'CARVALHOPOLIS', '3114709', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19497, 'CONCEICAO DA APARECIDA', '3117108', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19498, 'DIVISA NOVA', '3122405', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19499, 'FAMA', '3125200', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19500, 'MACHADO', '3139003', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19501, 'PARAGUACU', '3147204', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19502, 'POCO FUNDO', '3151701', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19503, 'SERRANIA', '3166907', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19504, 'BOA ESPERANCA', '3107109', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19505, 'CAMPANHA', '3110905', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19506, 'CAMPO DO MEIO', '3111309', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19507, 'CAMPOS GERAIS', '3111606', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19508, 'CARMO DA CACHOEIRA', '3113909', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19509, 'COQUEIRAL', '3118700', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19510, 'ELOI MENDES', '3123601', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19511, 'GUAPE', '3128105', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19512, 'ILICINEA', '3130507', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19513, 'MONSENHOR PAULO', '3142601', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19514, 'SANTANA DA VARGEM', '3158300', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19515, 'SAO BENTO ABADE', '3160801', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19516, 'SAO THOME DAS LETRAS', '3165206', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19517, 'TRES CORACOES', '3169307', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19518, 'TRES PONTAS', '3169406', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19519, 'VARGINHA', '3170701', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19520, 'ALBERTINA', '3101409', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19521, 'ANDRADAS', '3102605', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19522, 'BANDEIRA DO SUL', '3105301', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19523, 'BOTELHOS', '3108404', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19524, 'CALDAS', '3110301', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19525, 'CAMPESTRE', '3111002', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19526, 'IBITIURA DE MINAS', '3129905', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19527, 'INCONFIDENTES', '3130606', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19528, 'JACUTINGA', '3134905', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19529, 'MONTE SIAO', '3143401', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19530, 'OURO FINO', '3146008', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19531, 'POCOS DE CALDAS', '3151800', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19532, 'SANTA RITA DE CALDAS', '3159209', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19533, 'BOM REPOUSO', '3107901', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19534, 'BORDA DA MATA', '3108305', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19535, 'BUENO BRANDAO', '3109105', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19536, 'CAMANDUCAIA', '3110509', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19537, 'CAMBUI', '3110608', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19538, 'CONGONHAL', '3117900', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19539, 'CORREGO DO BOM JESUS', '3119906', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19540, 'ESPIRITO SANTO DO DOURADO', '3124401', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19541, 'ESTIVA', '3124500', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19542, 'EXTREMA', '3125101', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19543, 'GONCALVES', '3127404', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19544, 'IPUIUNA', '3131505', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19545, 'ITAPEVA', '3133600', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19546, 'MUNHOZ', '3143807', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19547, 'POUSO ALEGRE', '3152501', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19548, 'SAPUCAI-MIRIM', '3165404', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19549, 'SENADOR AMARAL', '3165578', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19550, 'SENADOR JOSE BENTO', '3165800', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19551, 'TOCOS DO MOJI', '3169059', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19552, 'TOLEDO', '3169109', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19553, 'CACHOEIRA DE MINAS', '3109709', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19554, 'CAREACU', '3113602', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19555, 'CONCEICAO DAS PEDRAS', '3117207', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19556, 'CONCEICAO DOS OUROS', '3117801', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19557, 'CORDISLANDIA', '3119005', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19558, 'HELIODORA', '3129202', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19559, 'NATERCIA', '3144409', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19560, 'PEDRALVA', '3149101', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19561, 'SANTA RITA DO SAPUCAI', '3159605', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19562, 'SAO GONCALO DO SAPUCAI', '3162005', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19563, 'SAO JOAO DA MATA', '3162302', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19564, 'SAO JOSE DO ALEGRE', '3163201', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19565, 'SAO SEBASTIAO DA BELA VISTA', '3164407', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19566, 'SILVIANOPOLIS', '3167400', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19567, 'TURVOLANDIA', '3169802', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19568, 'ALAGOA', '3101300', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19569, 'BAEPENDI', '3104908', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19570, 'CAMBUQUIRA', '3110707', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19571, 'CARMO DE MINAS', '3114105', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19572, 'CAXAMBU', '3115508', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19573, 'CONCEICAO DO RIO VERDE', '3117702', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19574, 'ITAMONTE', '3133006', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19575, 'ITANHANDU', '3133105', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19576, 'JESUANIA', '3135902', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19577, 'LAMBARI', '3137809', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19578, 'OLIMPIO NORONHA', '3145505', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19579, 'PASSA QUATRO', '3147600', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19580, 'POUSO ALTO', '3152600', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19581, 'SAO LOURENCO', '3163706', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19582, 'SAO SEBASTIAO DO RIO VERDE', '3164902', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19583, 'SOLEDADE DE MINAS', '3167806', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19584, 'AIURUOCA', '3101201', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19585, 'ANDRELANDIA', '3102803', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19586, 'ARANTINA', '3103603', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19587, 'BOCAINA DE MINAS', '3107208', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19588, 'BOM JARDIM DE MINAS', '3107505', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19589, 'CARVALHOS', '3114808', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19590, 'CRUZILIA', '3120805', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19591, 'LIBERDADE', '3138500', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19592, 'MINDURI', '3141900', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19593, 'PASSA-VINTE', '3147808', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19594, 'SAO VICENTE DE MINAS', '3165305', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19595, 'SERITINGA', '3166402', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19596, 'SERRANOS', '3167004', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19597, 'BRASOPOLIS', '3108909', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19598, 'CONSOLACAO', '3118502', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19599, 'CRISTINA', '3120508', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19600, 'DELFIM MOREIRA', '3121100', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19601, 'DOM VICOSO', '3122801', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19602, 'ITAJUBA', '3132404', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19603, 'MARIA DA FE', '3139904', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19604, 'MARMELOPOLIS', '3140407', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19605, 'PARAISOPOLIS', '3147303', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19606, 'PIRANGUCU', '3150901', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19607, 'PIRANGUINHO', '3151008', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19608, 'VIRGINIA', '3171709', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19609, 'WENCESLAU BRAZ', '3172202', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19610, 'CARRANCAS', '3114600', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19611, 'IJACI', '3130408', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19612, 'INGAI', '3130804', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19613, 'ITUMIRIM', '3134301', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19614, 'ITUTINGA', '3134509', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19615, 'LAVRAS', '3138203', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19616, 'LUMINARIAS', '3138708', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19617, 'NEPOMUCENO', '3144607', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19618, 'RIBEIRAO VERMELHO', '3154705', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19619, 'CONCEICAO DA BARRA DE MINAS', '3115201', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19620, 'CORONEL XAVIER CHAVES', '3119708', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19621, 'DORES DE CAMPOS', '3123007', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19622, 'LAGOA DOURADA', '3137403', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19623, 'MADRE DE DEUS DE MINAS', '3139102', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19624, 'NAZARENO', '3144508', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19625, 'PIEDADE DO RIO GRANDE', '3150307', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19626, 'PRADOS', '3152709', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19627, 'RESENDE COSTA', '3154200', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19628, 'RITAPOLIS', '3156106', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19629, 'SANTA CRUZ DE MINAS', '3157336', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19630, 'SANTANA DO GARAMBEU', '3158706', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19631, 'SAO JOAO DEL REI', '3162500', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19632, 'SAO TIAGO', '3165008', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19633, 'TIRADENTES', '3168804', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19634, 'ALFREDO VASCONCELOS', '3101631', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19635, 'ANTONIO CARLOS', '3102902', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19636, 'BARBACENA', '3105608', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19637, 'BARROSO', '3105905', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19638, 'CAPELA NOVA', '3112208', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19639, 'CARANAIBA', '3113107', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19640, 'CARANDAI', '3113206', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19641, 'DESTERRO DO MELO', '3121506', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19642, 'IBERTIOGA', '3129400', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19643, 'RESSAQUINHA', '3154408', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19644, 'SANTA BARBARA DO TUGURIO', '3157302', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19645, 'SENHORA DOS REMEDIOS', '3166204', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19646, 'ACAIACA', '3100401', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19647, 'BARRA LONGA', '3105707', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19648, 'DOM SILVERIO', '3122702', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19649, 'GUARACIABA', '3128204', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19650, 'JEQUERI', '3135506', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19651, 'ORATORIOS', '3145851', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19652, 'PIEDADE DE PONTE NOVA', '3150208', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19653, 'PONTE NOVA', '3152105', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19654, 'RAUL SOARES', '3154002', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19655, 'RIO CASCA', '3154903', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19656, 'RIO DOCE', '3155009', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19657, 'SANTA CRUZ DO ESCALVADO', '3157401', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19658, 'SANTO ANTONIO DO GRAMA', '3160108', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19659, 'SAO PEDRO DOS FERROS', '3164001', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19660, 'SEM-PEIXE', '3165560', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19661, 'SERICITA', '3166303', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19662, 'URUCANIA', '3170503', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19663, 'VERMELHO NOVO', '3171154', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19664, 'ABRE CAMPO', '3100302', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19665, 'ALTO CAPARAO', '3102050', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19666, 'CAPARAO', '3112109', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19667, 'CAPUTIRA', '3112901', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19668, 'CHALE', '3116001', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19669, 'DURANDE', '3123528', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19670, 'LAJINHA', '3137700', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19671, 'LUISBURGO', '3138674', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19672, 'MANHUACU', '3139409', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19673, 'MANHUMIRIM', '3139508', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19674, 'MARTINS SOARES', '3140530', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19675, 'MATIPO', '3140902', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19676, 'PEDRA BONITA', '3148756', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19677, 'ALTO JEQUITIBA', '3153509', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19678, 'REDUTO', '3154150', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19679, 'SANTA MARGARIDA', '3157906', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19680, 'SANTANA DO MANHUACU', '3158904', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19681, 'SAO JOAO DO MANHUACU', '3162559', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19682, 'SAO JOSE DO MANTIMENTO', '3163607', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19683, 'SIMONESIA', '3167608', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19684, 'ALTO RIO DOCE', '3102100', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19685, 'AMPARO DO SERRA', '3102506', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19686, 'ARAPONGA', '3103702', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19687, 'BRAS PIRES', '3108701', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19688, 'CAJURI', '3110202', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19689, 'CANAA', '3111705', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19690, 'CIPOTANEA', '3116308', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19691, 'COIMBRA', '3116704', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19692, 'ERVALIA', '3124005', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19693, 'LAMIM', '3137908', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19694, 'PAULA CANDIDO', '3148301', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19695, 'PEDRA DO ANTA', '3148806', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19696, 'PIRANGA', '3150802', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19697, 'PORTO FIRME', '3152303', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19698, 'PRESIDENTE BERNARDES', '3153103', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19699, 'RIO ESPERA', '3155207', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19700, 'SAO MIGUEL DO ANTA', '3163805', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19701, 'SENHORA DE OLIVEIRA', '3166006', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19702, 'TEIXEIRAS', '3168507', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19703, 'VICOSA', '3171303', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19704, 'ANTONIO PRADO DE MINAS', '3103108', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19705, 'BARAO DE MONTE ALTO', '3105509', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19706, 'CAIANA', '3110103', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19707, 'CARANGOLA', '3113305', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19708, 'DIVINO', '3122009', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19709, 'ESPERA FELIZ', '3124203', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19710, 'EUGENOPOLIS', '3124906', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19711, 'FARIA LEMOS', '3125309', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19712, 'FERVEDOURO', '3125952', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19713, 'MIRADOURO', '3142106', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19714, 'MIRAI', '3142205', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19715, 'MURIAE', '3143906', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19716, 'ORIZANIA', '3145877', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19717, 'PATROCINIO DO MURIAE', '3148202', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19718, 'PEDRA DOURADA', '3149002', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19719, 'ROSARIO DA LIMEIRA', '3156452', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19720, 'SAO FRANCISCO DO GLORIA', '3161403', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19721, 'SAO SEBASTIAO DA VARGEM ALEGRE', '3164431', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19722, 'TOMBOS', '3169208', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19723, 'VIEIRAS', '3171402', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19724, 'ASTOLFO DUTRA', '3104601', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19725, 'DIVINESIA', '3121902', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19726, 'DORES DO TURVO', '3123304', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19727, 'GUARANI', '3128402', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19728, 'GUIDOVAL', '3128808', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19729, 'GUIRICEMA', '3129004', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19730, 'MERCES', '3141603', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19731, 'PIRAUBA', '3151305', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19732, 'RIO POMBA', '3155801', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19733, 'RODEIRO', '3156304', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19734, 'SAO GERALDO', '3161502', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19735, 'SENADOR FIRMINO', '3165701', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19736, 'SILVEIRANIA', '3167301', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19737, 'TABULEIRO', '3167905', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19738, 'TOCANTINS', '3169000', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19739, 'UBA', '3169901', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19740, 'VISCONDE DO RIO BRANCO', '3172004', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19741, 'ARACITABA', '3103306', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19742, 'BELMIRO BRAGA', '3106101', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19743, 'BIAS FORTES', '3106804', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19744, 'BICAS', '3106903', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19745, 'CHACARA', '3115904', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19746, 'CHIADOR', '3116209', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19747, 'CORONEL PACHECO', '3119609', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19748, 'DESCOBERTO', '3121308', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19749, 'EWBANK DA CAMARA', '3125002', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19750, 'GOIANA', '3127388', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19751, 'GUARARA', '3128501', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19752, 'JUIZ DE FORA', '3136702', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19753, 'LIMA DUARTE', '3138609', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19754, 'MAR DE ESPANHA', '3139805', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19755, 'MARIPA DE MINAS', '3140209', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19756, 'MATIAS BARBOSA', '3140803', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19757, 'OLARIA', '3145406', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19758, 'OLIVEIRA FORTES', '3145703', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19759, 'PAIVA', '3146602', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19760, 'PEDRO TEIXEIRA', '3149408', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19761, 'PEQUERI', '3149507', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19762, 'PIAU', '3150109', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19763, 'RIO NOVO', '3155405', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19764, 'RIO PRETO', '3155900', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19765, 'ROCHEDO DE MINAS', '3156205', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19766, 'SANTA BARBARA DO MONTE VERDE', '3157278', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19767, 'SANTANA DO DESERTO', '3158607', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19768, 'SANTA RITA DE JACUTINGA', '3159308', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19769, 'SANTA RITA DE IBITIPOCA', '3159407', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19770, 'SANTOS DUMONT', '3160702', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19771, 'SAO JOAO NEPOMUCENO', '3162906', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19772, 'SENADOR CORTES', '3165602', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19773, 'SIMAO PEREIRA', '3167509', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19774, 'ALEM PARAIBA', '3101508', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19775, 'ARGIRITA', '3104403', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19776, 'CATAGUASES', '3115300', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19777, 'DONA EUSEBIA', '3122900', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19778, 'ESTRELA DALVA', '3124609', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19779, 'ITAMARATI DE MINAS', '3132602', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19780, 'LARANJAL', '3138005', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19781, 'LEOPOLDINA', '3138401', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19782, 'PALMA', '3146701', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19783, 'PIRAPETINGA', '3151107', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19784, 'RECREIO', '3154101', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19785, 'SANTANA DE CATAGUASES', '3158409', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19786, 'SANTO ANTONIO DO AVENTUREIRO', '3160009', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19787, 'VOLTA GRANDE', '3172103', 31);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19788, 'AGUA DOCE DO NORTE', '3200169', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19789, 'BARRA DE SAO FRANCISCO', '3200904', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19790, 'ECOPORANGA', '3202108', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19791, 'MANTENOPOLIS', '3203304', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19792, 'AGUIA BRANCA', '3200136', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19793, 'BOA ESPERANCA', '3201001', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19794, 'NOVA VENECIA', '3203908', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19795, 'SAO GABRIEL DA PALHA', '3204708', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19796, 'VILA PAVAO', '3205150', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19797, 'VILA VALERIO', '3205176', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19798, 'ALTO RIO NOVO', '3200359', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19799, 'BAIXO GUANDU', '3200805', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19800, 'COLATINA', '3201506', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19801, 'GOVERNADOR LINDENBERG', '3202256', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19802, 'MARILANDIA', '3203353', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19803, 'PANCAS', '3204005', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19804, 'SAO DOMINGOS DO NORTE', '3204658', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19805, 'MONTANHA', '3203502', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19806, 'MUCURICI', '3203601', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19807, 'PINHEIROS', '3204104', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19808, 'PONTO BELO', '3204252', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19809, 'CONCEICAO DA BARRA', '3201605', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19810, 'JAGUARE', '3203056', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19811, 'PEDRO CANARIO', '3204054', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19812, 'SAO MATEUS', '3204906', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19813, 'ARACRUZ', '3200607', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19814, 'FUNDAO', '3202207', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19815, 'IBIRACU', '3202504', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19816, 'JOAO NEIVA', '3203130', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19817, 'LINHARES', '3203205', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19818, 'RIO BANANAL', '3204351', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19819, 'SOORETAMA', '3205010', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19820, 'AFONSO CLAUDIO', '3200102', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19821, 'BREJETUBA', '3201159', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19822, 'CONCEICAO DO CASTELO', '3201704', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19823, 'DOMINGOS MARTINS', '3201902', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19824, 'LARANJA DA TERRA', '3203163', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19825, 'MARECHAL FLORIANO', '3203346', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19826, 'VENDA NOVA DO IMIGRANTE', '3205069', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19827, 'ITAGUACU', '3202702', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19828, 'ITARANA', '3202900', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19829, 'SANTA LEOPOLDINA', '3204500', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19830, 'SANTA MARIA DE JETIBA', '3204559', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19831, 'SANTA TERESA', '3204609', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19832, 'SAO ROQUE DO CANAA', '3204955', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19833, 'CARIACICA', '3201308', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19834, 'SERRA', '3205002', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19835, 'VIANA', '3205101', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19836, 'VILA VELHA', '3205200', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19837, 'VITORIA', '3205309', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19838, 'ALFREDO CHAVES', '3200300', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19839, 'ANCHIETA', '3200409', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19840, 'GUARAPARI', '3202405', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19841, 'ICONHA', '3202603', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19842, 'PIUMA', '3204203', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19843, 'RIO NOVO DO SUL', '3204401', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19844, 'ALEGRE', '3200201', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19845, 'DIVINO DE SAO LOURENCO', '3201803', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19846, 'DORES DO RIO PRETO', '3202009', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19847, 'GUACUI', '3202306', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19848, 'IBATIBA', '3202454', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19849, 'IBITIRAMA', '3202553', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19850, 'IRUPI', '3202652', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19851, 'IUNA', '3203007', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19852, 'MUNIZ FREIRE', '3203700', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19853, 'APIACA', '3200508', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19854, 'ATILIO VIVACQUA', '3200706', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19855, 'BOM JESUS DO NORTE', '3201100', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19856, 'CACHOEIRO DE ITAPEMIRIM', '3201209', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19857, 'CASTELO', '3201407', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19858, 'JERONIMO MONTEIRO', '3203106', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19859, 'MIMOSO DO SUL', '3203403', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19860, 'MUQUI', '3203809', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19861, 'SAO JOSE DO CALCADO', '3204807', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19862, 'VARGEM ALTA', '3205036', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19863, 'ITAPEMIRIM', '3202801', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19864, 'MARATAIZES', '3203320', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19865, 'PRESIDENTE KENNEDY', '3204302', 32);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19866, 'BOM JESUS DO ITABAPOANA', '3300605', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19867, 'ITALVA', '3302056', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19868, 'ITAPERUNA', '3302205', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19869, 'LAJE DO MURIAE', '3302304', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19870, 'NATIVIDADE', '3303104', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19871, 'PORCIUNCULA', '3304102', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19872, 'VARRE-SAI', '3306156', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19873, 'APERIBE', '3300159', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19874, 'CAMBUCI', '3300902', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19875, 'ITAOCARA', '3302106', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19876, 'MIRACEMA', '3303005', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19877, 'SANTO ANTONIO DE PADUA', '3304706', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19878, 'SAO JOSE DE UBA', '3305133', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19879, 'CAMPOS DOS GOYTACAZES', '3301009', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19880, 'CARDOSO MOREIRA', '3301157', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19881, 'SAO FRANCISCO DE ITABAPOANA', '3304755', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19882, 'SAO FIDELIS', '3304805', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19883, 'SAO JOAO DA BARRA', '3305000', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19884, 'CARAPEBUS', '3300936', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19885, 'CONCEICAO DE MACABU', '3301405', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19886, 'MACAE', '3302403', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19887, 'QUISSAMA', '3304151', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19888, 'AREAL', '3300225', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19889, 'COMENDADOR LEVY GASPARIAN', '3300951', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19890, 'PARAIBA DO SUL', '3303708', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19891, 'SAPUCAIA', '3305406', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19892, 'TRES RIOS', '3306008', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19893, 'CANTAGALO', '3301108', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19894, 'CARMO', '3301207', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19895, 'CORDEIRO', '3301504', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19896, 'MACUCO', '3302452', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19897, 'BOM JARDIM', '3300506', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19898, 'DUAS BARRAS', '3301603', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19899, 'NOVA FRIBURGO', '3303401', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19900, 'SUMIDOURO', '3305703', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19901, 'SANTA MARIA MADALENA', '3304607', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19902, 'SAO SEBASTIAO DO ALTO', '3305307', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19903, 'TRAJANO DE MORAIS', '3305901', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19904, 'CASIMIRO DE ABREU', '3301306', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19905, 'RIO DAS OSTRAS', '3304524', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19906, 'SILVA JARDIM', '3305604', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19907, 'ARARUAMA', '3300209', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19908, 'ARMACAO DOS BUZIOS', '3300233', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19909, 'ARRAIAL DO CABO', '3300258', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19910, 'CABO FRIO', '3300704', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19911, 'IGUABA GRANDE', '3301876', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19912, 'SAO PEDRO DA ALDEIA', '3305208', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19913, 'SAQUAREMA', '3305505', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19914, 'BARRA MANSA', '3300407', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19915, 'ITATIAIA', '3302254', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19916, 'PINHEIRAL', '3303955', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19917, 'PIRAI', '3304003', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19918, 'PORTO REAL', '3304110', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19919, 'QUATIS', '3304128', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19920, 'RESENDE', '3304201', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19921, 'RIO CLARO', '3304409', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19922, 'VOLTA REDONDA', '3306305', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19923, 'BARRA DO PIRAI', '3300308', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19924, 'RIO DAS FLORES', '3304508', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19925, 'VALENCA', '3306107', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19926, 'ANGRA DOS REIS', '3300100', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19927, 'PARATI', '3303807', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19928, 'ENGENHEIRO PAULO DE FRONTIN', '3301801', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19929, 'MENDES', '3302809', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19930, 'MIGUEL PEREIRA', '3302908', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19931, 'PARACAMBI', '3303609', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19932, 'PATY DO ALFERES', '3303856', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19933, 'VASSOURAS', '3306206', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19934, 'PETROPOLIS', '3303906', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19935, 'SAO JOSE DO VALE DO RIO PRETO', '3305158', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19936, 'TERESOPOLIS', '3305802', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19937, 'CACHOEIRAS DE MACACU', '3300803', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19938, 'RIO BONITO', '3304300', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19939, 'ITAGUAI', '3302007', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19940, 'MANGARATIBA', '3302601', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19941, 'SEROPEDICA', '3305554', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19942, 'BELFORD ROXO', '3300456', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19943, 'DUQUE DE CAXIAS', '3301702', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19944, 'GUAPIMIRIM', '3301850', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19945, 'ITABORAI', '3301900', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19946, 'JAPERI', '3302270', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19947, 'MAGE', '3302502', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19948, 'MARICA', '3302700', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19949, 'MESQUITA', '3302858', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19950, 'NILOPOLIS', '3303203', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19952, 'NOVA IGUACU', '3303500', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19953, 'QUEIMADOS', '3304144', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19955, 'SAO GONCALO', '3304904', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19956, 'SAO JOAO DE MERITI', '3305109', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19957, 'TANGUA', '3305752', 33);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19958, 'APARECIDA D OESTE', '3502606', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19959, 'ASPASIA', '3503950', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19960, 'DIRCE REIS', '3513850', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19961, 'DOLCINOPOLIS', '3514205', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19962, 'JALES', '3524808', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19963, 'MARINOPOLIS', '3529104', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19964, 'MESOPOLIS', '3529658', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19965, 'NOVA CANAA PAULISTA', '3532843', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19966, 'PALMEIRA D OESTE', '3535200', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19967, 'PARANAPUA', '3535903', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19968, 'PONTALINDA', '3540259', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19969, 'POPULINA', '3540408', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19970, 'RUBINEIA', '3544509', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19971, 'SANTA ALBERTINA', '3545704', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19972, 'SANTA CLARA D OESTE', '3546108', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19973, 'SANTA FE DO SUL', '3546603', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19974, 'SANTANA DA PONTE PENSA', '3547205', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19975, 'SANTA RITA D OESTE', '3547403', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19976, 'SANTA SALETE', '3547650', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19977, 'SAO FRANCISCO', '3549003', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19978, 'TRES FRONTEIRAS', '3554904', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19979, 'URANIA', '3555802', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19980, 'VITORIA BRASIL', '3556958', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19981, 'ESTRELA D OESTE', '3515202', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19982, 'FERNANDOPOLIS', '3515509', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19983, 'GUARANI D OESTE', '3518008', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19984, 'INDIAPORA', '3520707', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19985, 'MACEDONIA', '3528205', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19986, 'MERIDIANO', '3529609', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19987, 'MIRA ESTRELA', '3530003', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19988, 'OUROESTE', '3534757', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19989, 'PEDRANOPOLIS', '3536901', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19990, 'SAO JOAO DAS DUAS PONTES', '3549201', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19991, 'TURMALINA', '3555307', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19992, 'ALVARES FLORENCE', '3501202', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19993, 'AMERICO DE CAMPOS', '3501806', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19994, 'CARDOSO', '3510708', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19995, 'COSMORAMA', '3512902', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19996, 'PARISI', '3536257', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19997, 'PONTES GESTAL', '3540309', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19998, 'RIOLANDIA', '3544202', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (19999, 'VALENTIM GENTIL', '3556107', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20000, 'VOTUPORANGA', '3557105', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20001, 'ADOLFO', '3500204', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20002, 'ALTAIR', '3500907', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20003, 'BADY BASSITT', '3504602', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20004, 'BALSAMO', '3504800', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20005, 'CEDRAL', '3511300', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20006, 'GUAPIACU', '3517505', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20007, 'GUARACI', '3517901', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20008, 'IBIRA', '3519402', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20009, 'ICEM', '3519808', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20010, 'IPIGUA', '3521150', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20011, 'JACI', '3524501', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20012, 'JOSE BONIFACIO', '3525706', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20013, 'MENDONCA', '3529500', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20014, 'MIRASSOL', '3530300', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20015, 'MIRASSOLANDIA', '3530409', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20016, 'NOVA ALIANCA', '3532801', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20017, 'NOVA GRANADA', '3533007', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20018, 'OLIMPIA', '3533908', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20019, 'ONDA VERDE', '3534005', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20020, 'ORINDIUVA', '3534203', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20021, 'PALESTINA', '3535002', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20022, 'PAULO DE FARIA', '3536604', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20023, 'PLANALTO', '3539608', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20024, 'POTIRENDABA', '3540804', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20025, 'SAO JOSE DO RIO PRETO', '3549805', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20026, 'TANABI', '3553401', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20027, 'UBARANA', '3555356', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20028, 'UCHOA', '3555604', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20029, 'ZACARIAS', '3557154', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20030, 'ARIRANHA', '3503703', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20031, 'CAJOBI', '3509304', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20032, 'CATANDUVA', '3511102', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20033, 'CATIGUA', '3511201', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20034, 'ELISIARIO', '3514924', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20035, 'EMBAUBA', '3514957', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20036, 'NOVAIS', '3533254', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20037, 'PALMARES PAULISTA', '3535101', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20038, 'PARAISO', '3535705', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20039, 'PINDORAMA', '3538105', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20040, 'SANTA ADELIA', '3545605', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20041, 'SEVERINIA', '3551900', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20042, 'TABAPUA', '3552601', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20043, 'AURIFLAMA', '3504206', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20044, 'FLOREAL', '3515905', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20045, 'GASTAO VIDIGAL', '3516804', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20046, 'GENERAL SALGADO', '3516903', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20047, 'GUZOLANDIA', '3518909', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20048, 'MAGDA', '3528304', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20049, 'NOVA CASTILHO', '3532868', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20050, 'NOVA LUZITANIA', '3533304', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20051, 'SAO JOAO DE IRACEMA', '3549250', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20052, 'MACAUBAL', '3528106', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20053, 'MONCOES', '3531001', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20054, 'MONTE APRAZIVEL', '3531407', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20055, 'NEVES PAULISTA', '3532504', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20056, 'NHANDEARA', '3532603', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20057, 'NIPOA', '3532702', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20058, 'POLONI', '3539905', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20059, 'SEBASTIANOPOLIS DO SUL', '3551306', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20060, 'UNIAO PAULISTA', '3555703', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20061, 'IRAPUA', '3521507', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20062, 'ITAJOBI', '3521903', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20063, 'MARAPOAMA', '3528858', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20064, 'NOVO HORIZONTE', '3533502', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20065, 'SALES', '3544806', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20066, 'URUPES', '3556008', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20067, 'BARRETOS', '3505500', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20068, 'COLINA', '3512001', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20069, 'COLOMBIA', '3512100', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20070, 'GUAIRA', '3517406', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20071, 'IPUA', '3521309', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20072, 'JABORANDI', '3524204', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20073, 'MIGUELOPOLIS', '3529708', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20074, 'MORRO AGUDO', '3531902', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20075, 'NUPORANGA', '3533601', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20076, 'ORLANDIA', '3534302', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20077, 'SALES OLIVEIRA', '3544905', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20078, 'SAO JOAQUIM DA BARRA', '3549409', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20079, 'ARAMINA', '3503000', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20080, 'BURITIZAL', '3508207', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20081, 'GUARA', '3517703', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20082, 'IGARAPAVA', '3520103', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20083, 'ITUVERAVA', '3524105', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20084, 'CRISTAIS PAULISTA', '3513207', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20085, 'FRANCA', '3516200', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20086, 'ITIRAPUA', '3523701', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20087, 'JERIQUARA', '3525409', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20088, 'PATROCINIO PAULISTA', '3536307', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20089, 'PEDREGULHO', '3537008', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20090, 'RESTINGA', '3542701', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20091, 'RIBEIRAO CORRENTE', '3543105', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20092, 'RIFAINA', '3543600', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20093, 'SAO JOSE DA BELA VISTA', '3549508', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20094, 'BEBEDOURO', '3506102', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20095, 'CANDIDO RODRIGUES', '3510104', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20096, 'FERNANDO PRESTES', '3515608', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20097, 'GUARIBA', '3518602', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20098, 'JABOTICABAL', '3524303', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20099, 'MONTE ALTO', '3531308', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20100, 'MONTE AZUL PAULISTA', '3531506', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20101, 'PIRANGI', '3539004', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20102, 'PITANGUEIRAS', '3539509', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20103, 'SANTA ERNESTINA', '3546504', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20104, 'TAIACU', '3553104', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20105, 'TAIUVA', '3553203', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20106, 'TAQUARAL', '3553658', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20107, 'TAQUARITINGA', '3553708', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20108, 'TERRA ROXA', '3554409', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20109, 'VIRADOURO', '3556800', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20110, 'VISTA ALEGRE DO ALTO', '3556909', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20111, 'BARRINHA', '3505609', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20112, 'BRODOWSKI', '3507803', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20113, 'CRAVINHOS', '3513108', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20114, 'DUMONT', '3514601', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20115, 'GUATAPARA', '3518859', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20116, 'JARDINOPOLIS', '3525102', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20117, 'LUIS ANTONIO', '3527603', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20118, 'PONTAL', '3540200', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20119, 'PRADOPOLIS', '3540903', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20120, 'RIBEIRAO PRETO', '3543402', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20121, 'SANTA RITA DO PASSA QUATRO', '3547502', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20122, 'SANTA ROSA DE VITERBO', '3547601', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20123, 'SAO SIMAO', '3550902', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20124, 'SERRA AZUL', '3551405', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20125, 'SERRANA', '3551504', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20126, 'SERTAOZINHO', '3551702', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20127, 'ALTINOPOLIS', '3501004', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20128, 'BATATAIS', '3505906', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20129, 'CAJURU', '3509403', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20130, 'CASSIA DOS COQUEIROS', '3510906', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20131, 'SANTA CRUZ DA ESPERANCA', '3546256', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20132, 'SANTO ANTONIO DA ALEGRIA', '3547908', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20133, 'ANDRADINA', '3502101', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20134, 'CASTILHO', '3511003', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20135, 'GUARACAI', '3517802', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20136, 'ILHA SOLTEIRA', '3520442', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20137, 'ITAPURA', '3523008', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20138, 'MIRANDOPOLIS', '3530102', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20139, 'MURUTINGA DO SUL', '3532108', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20140, 'NOVA INDEPENDENCIA', '3533205', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20141, 'PEREIRA BARRETO', '3537404', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20142, 'SUD MENNUCCI', '3552304', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20143, 'SUZANAPOLIS', '3552551', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20144, 'ARACATUBA', '3502804', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20145, 'BENTO DE ABREU', '3506201', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20146, 'GUARARAPES', '3518206', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20147, 'LAVINIA', '3526506', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20148, 'RUBIACEA', '3544400', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20149, 'SANTO ANTONIO DO ARACANGUA', '3548054', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20150, 'VALPARAISO', '3556305', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20151, 'ALTO ALEGRE', '3501103', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20152, 'AVANHANDAVA', '3504404', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20153, 'BARBOSA', '3505104', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20154, 'BILAC', '3506409', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20155, 'BIRIGUI', '3506508', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20156, 'BRAUNA', '3507704', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20157, 'BREJO ALEGRE', '3507753', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20158, 'BURITAMA', '3508108', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20159, 'CLEMENTINA', '3511904', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20160, 'COROADOS', '3512506', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20161, 'GABRIEL MONTEIRO', '3516507', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20162, 'GLICERIO', '3517109', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20163, 'LOURDES', '3527256', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20164, 'LUIZIANIA', '3527702', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20165, 'PENAPOLIS', '3537305', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20166, 'PIACATU', '3537701', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20167, 'SANTOPOLIS DO AGUAPEI', '3548401', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20168, 'TURIUBA', '3555208', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20169, 'CAFELANDIA', '3508801', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20170, 'GETULINA', '3517000', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20171, 'GUAICARA', '3517208', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20172, 'GUAIMBE', '3517307', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20173, 'JULIO MESQUITA', '3525805', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20174, 'LINS', '3527108', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20175, 'PROMISSAO', '3541604', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20176, 'SABINO', '3544608', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20177, 'AGUDOS', '3500709', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20178, 'AREALVA', '3503406', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20179, 'AREIOPOLIS', '3503604', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20180, 'AVAI', '3504305', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20181, 'BALBINOS', '3504701', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20182, 'BAURU', '3506003', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20183, 'BOREBI', '3507456', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20184, 'CABRALIA PAULISTA', '3508306', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20185, 'DUARTINA', '3514502', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20186, 'GUARANTA', '3518107', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20187, 'IACANGA', '3519105', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20188, 'LENCOIS PAULISTA', '3526803', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20189, 'LUCIANOPOLIS', '3527504', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20190, 'PAULISTANIA', '3536570', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20191, 'PIRAJUI', '3538907', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20192, 'PIRATININGA', '3539400', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20193, 'PONGAI', '3540101', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20194, 'PRESIDENTE ALVES', '3541109', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20195, 'REGINOPOLIS', '3542503', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20196, 'UBIRAJARA', '3555505', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20197, 'URU', '3555901', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20198, 'BARIRI', '3505203', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20199, 'BARRA BONITA', '3505302', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20200, 'BOCAINA', '3506805', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20201, 'BORACEIA', '3507308', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20202, 'DOIS CORREGOS', '3514106', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20203, 'IGARACU DO TIETE', '3520004', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20204, 'ITAJU', '3522000', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20205, 'ITAPUI', '3522901', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20206, 'JAU', '3525300', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20207, 'MACATUBA', '3528007', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20208, 'MINEIROS DO TIETE', '3529807', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20209, 'PEDERNEIRAS', '3536703', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20210, 'AGUAS DE SANTA BARBARA', '3500550', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20211, 'ARANDU', '3503109', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20212, 'AVARE', '3504503', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20213, 'CERQUEIRA CESAR', '3511409', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20214, 'IARAS', '3519253', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20215, 'ITAI', '3521804', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20216, 'ITATINGA', '3523503', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20217, 'PARANAPANEMA', '3535804', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20218, 'ANHEMBI', '3502309', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20219, 'BOFETE', '3506904', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20220, 'BOTUCATU', '3507506', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20221, 'CONCHAS', '3512308', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20222, 'PARDINHO', '3536109', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20223, 'PRATANIA', '3541059', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20224, 'SAO MANUEL', '3550100', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20225, 'AMERICO BRASILIENSE', '3501707', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20226, 'ARARAQUARA', '3503208', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20227, 'BOA ESPERANCA DO SUL', '3506706', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20228, 'BORBOREMA', '3507407', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20229, 'DOBRADA', '3514007', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20230, 'GAVIAO PEIXOTO', '3516853', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20231, 'IBITINGA', '3519600', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20232, 'ITAPOLIS', '3522703', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20233, 'MATAO', '3529302', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20234, 'MOTUCA', '3532058', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20235, 'NOVA EUROPA', '3532900', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20236, 'RINCAO', '3543709', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20237, 'SANTA LUCIA', '3546900', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20238, 'TABATINGA', '3552700', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20239, 'TRABIJU', '3554755', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20240, 'ANALANDIA', '3502002', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20241, 'DESCALVADO', '3513702', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20242, 'DOURADO', '3514304', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20243, 'IBATE', '3519303', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20244, 'RIBEIRAO BONITO', '3542909', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20245, 'SAO CARLOS', '3548906', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20246, 'BROTAS', '3507902', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20247, 'CORUMBATAI', '3512704', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20248, 'IPEUNA', '3521101', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20249, 'ITIRAPINA', '3523602', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20250, 'RIO CLARO', '3543907', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20251, 'TORRINHA', '3554706', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20252, 'ARARAS', '3503307', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20253, 'CONCHAL', '3512209', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20254, 'CORDEIROPOLIS', '3512407', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20255, 'IRACEMAPOLIS', '3521408', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20256, 'LEME', '3526704', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20257, 'LIMEIRA', '3526902', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20258, 'SANTA CRUZ DA CONCEICAO', '3546207', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20259, 'SANTA GERTRUDES', '3546702', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20260, 'AGUAS DE SAO PEDRO', '3500600', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20261, 'CAPIVARI', '3510401', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20262, 'CHARQUEADA', '3511706', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20263, 'JUMIRIM', '3525854', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20264, 'MOMBUCA', '3530904', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20265, 'PIRACICABA', '3538709', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20266, 'RAFARD', '3542107', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20267, 'RIO DAS PEDRAS', '3544004', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20268, 'SALTINHO', '3545159', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20269, 'SANTA MARIA DA SERRA', '3547007', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20270, 'SAO PEDRO', '3550407', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20271, 'TIETE', '3554508', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20272, 'AGUAI', '3500303', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20273, 'PIRASSUNUNGA', '3539301', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20274, 'PORTO FERREIRA', '3540705', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20275, 'SANTA CRUZ DAS PALMEIRAS', '3546306', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20276, 'AGUAS DA PRATA', '3500402', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20277, 'CACONDE', '3508702', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20278, 'CASA BRANCA', '3510807', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20279, 'DIVINOLANDIA', '3513900', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20280, 'ESPIRITO SANTO DO PINHAL', '3515186', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20281, 'ITOBI', '3523800', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20282, 'MOCOCA', '3530508', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20283, 'SANTO ANTONIO DO JARDIM', '3548104', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20284, 'SAO JOAO DA BOA VISTA', '3549102', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20285, 'SAO JOSE DO RIO PARDO', '3549706', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20286, 'SAO SEBASTIAO DA GRAMA', '3550803', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20287, 'TAMBAU', '3553302', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20288, 'TAPIRATIBA', '3553609', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20289, 'VARGEM GRANDE DO SUL', '3556404', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20290, 'ARTUR NOGUEIRA', '3503802', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20291, 'ENGENHEIRO COELHO', '3515152', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20292, 'ITAPIRA', '3522604', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20293, 'MOGI GUACU', '3530706', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20294, 'MOJI MIRIM', '3530805', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20295, 'SANTO ANTONIO DE POSSE', '3548005', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20296, 'ESTIVA GERBI', '3557303', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20297, 'AMERICANA', '3501608', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20298, 'CAMPINAS', '3509502', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20299, 'COSMOPOLIS', '3512803', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20300, 'ELIAS FAUSTO', '3514908', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20301, 'HOLAMBRA', '3519055', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20302, 'HORTOLANDIA', '3519071', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20303, 'INDAIATUBA', '3520509', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20304, 'JAGUARIUNA', '3524709', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20305, 'MONTE MOR', '3531803', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20306, 'NOVA ODESSA', '3533403', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20307, 'PAULINIA', '3536505', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20308, 'PEDREIRA', '3537107', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20310, 'SUMARE', '3552403', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20311, 'VALINHOS', '3556206', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20312, 'VINHEDO', '3556701', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20313, 'AGUAS DE LINDOIA', '3500501', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20314, 'AMPARO', '3501905', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20315, 'LINDOIA', '3527009', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20316, 'MONTE ALEGRE DO SUL', '3531209', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20317, 'PEDRA BELA', '3536802', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20318, 'PINHALZINHO', '3538204', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20319, 'SERRA NEGRA', '3551603', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20320, 'SOCORRO', '3552106', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20321, 'DRACENA', '3514403', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20322, 'JUNQUEIROPOLIS', '3526001', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20323, 'MONTE CASTELO', '3531605', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20324, 'NOVA GUATAPORANGA', '3533106', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20325, 'OURO VERDE', '3534807', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20326, 'PANORAMA', '3535408', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20327, 'PAULICEIA', '3536406', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20328, 'SANTA MERCEDES', '3547106', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20329, 'SAO JOAO DO PAU D ALHO', '3549300', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20330, 'TUPI PAULISTA', '3555109', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20331, 'ADAMANTINA', '3500105', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20332, 'FLORA RICA', '3515806', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20333, 'FLORIDA PAULISTA', '3516002', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20334, 'INUBIA PAULISTA', '3520806', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20335, 'IRAPURU', '3521606', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20336, 'LUCELIA', '3527405', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20337, 'MARIAPOLIS', '3528908', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20338, 'OSVALDO CRUZ', '3534609', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20339, 'PACAEMBU', '3534906', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20340, 'PARAPUA', '3536000', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20341, 'PRACINHA', '3540853', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20342, 'RINOPOLIS', '3543808', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20343, 'SAGRES', '3544707', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20344, 'SALMOURAO', '3545100', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20345, 'ALFREDO MARCONDES', '3500808', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20346, 'ALVARES MACHADO', '3501301', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20347, 'ANHUMAS', '3502408', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20348, 'CAIABU', '3508900', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20349, 'CAIUA', '3509106', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20350, 'EMILIANOPOLIS', '3515129', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20351, 'ESTRELA DO NORTE', '3515301', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20352, 'EUCLIDES DA CUNHA PAULISTA', '3515350', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20353, 'INDIANA', '3520608', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20354, 'JOAO RAMALHO', '3525607', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20355, 'MARABA PAULISTA', '3528700', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20356, 'MARTINOPOLIS', '3529203', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20357, 'MIRANTE DO PARANAPANEMA', '3530201', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20358, 'NARANDIBA', '3532207', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20359, 'PIQUEROBI', '3538303', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20360, 'PIRAPOZINHO', '3539202', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20361, 'PRESIDENTE BERNARDES', '3541208', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20362, 'PRESIDENTE EPITACIO', '3541307', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20363, 'PRESIDENTE PRUDENTE', '3541406', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20364, 'PRESIDENTE VENCESLAU', '3541505', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20365, 'RANCHARIA', '3542206', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20366, 'REGENTE FEIJO', '3542404', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20367, 'RIBEIRAO DOS INDIOS', '3543238', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20368, 'ROSANA', '3544251', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20369, 'SANDOVALINA', '3545506', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20370, 'SANTO ANASTACIO', '3547700', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20371, 'SANTO EXPEDITO', '3548302', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20372, 'TACIBA', '3552908', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20373, 'TARABAI', '3553906', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20374, 'TEODORO SAMPAIO', '3554300', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20375, 'ARCO-IRIS', '3503356', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20376, 'BASTOS', '3505807', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20377, 'HERCULANDIA', '3519006', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20378, 'IACRI', '3519204', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20379, 'QUEIROZ', '3541802', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20380, 'QUINTANA', '3542008', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20381, 'TUPA', '3555000', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20382, 'ALVARO DE CARVALHO', '3501400', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20383, 'ALVINLANDIA', '3501509', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20384, 'ECHAPORA', '3514700', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20385, 'FERNAO', '3515657', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20386, 'GALIA', '3516606', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20387, 'GARCA', '3516705', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20388, 'LUPERCIO', '3527801', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20389, 'MARILIA', '3529005', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20390, 'OCAUCU', '3533700', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20391, 'ORIENTE', '3534104', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20392, 'OSCAR BRESSANE', '3534500', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20393, 'POMPEIA', '3540002', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20394, 'VERA CRUZ', '3556602', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20395, 'ASSIS', '3504008', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20396, 'BORA', '3507209', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20397, 'CAMPOS NOVOS PAULISTA', '3509809', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20398, 'CANDIDO MOTA', '3510005', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20399, 'CRUZALIA', '3513306', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20400, 'FLORINIA', '3516101', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20401, 'IBIRAREMA', '3519501', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20402, 'IEPE', '3519907', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20403, 'LUTECIA', '3527900', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20404, 'MARACAI', '3528809', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20405, 'NANTES', '3532157', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20406, 'PALMITAL', '3535309', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20407, 'PARAGUACU PAULISTA', '3535507', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20408, 'PEDRINHAS PAULISTA', '3537156', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20409, 'PLATINA', '3539707', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20410, 'QUATA', '3541703', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20411, 'TARUMA', '3553955', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20412, 'BERNARDINO DE CAMPOS', '3506300', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20413, 'CANITAR', '3510153', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20414, 'ESPIRITO SANTO DO TURVO', '3515194', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20415, 'FARTURA', '3515400', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20416, 'IPAUSSU', '3520905', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20417, 'MANDURI', '3528601', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20418, 'OLEO', '3533809', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20419, 'OURINHOS', '3534708', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20420, 'PIRAJU', '3538808', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20421, 'RIBEIRAO DO SUL', '3543204', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20422, 'SALTO GRANDE', '3545407', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20423, 'SANTA CRUZ DO RIO PARDO', '3546405', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20424, 'SAO PEDRO DO TURVO', '3550506', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20425, 'SARUTAIA', '3551207', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20426, 'TAGUAI', '3553005', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20427, 'TEJUPA', '3554201', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20428, 'TIMBURI', '3554607', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20429, 'CHAVANTES', '3557204', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20430, 'BARAO DE ANTONINA', '3505005', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20431, 'BOM SUCESSO DE ITARARE', '3507159', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20432, 'BURI', '3508009', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20433, 'CORONEL MACEDO', '3512605', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20434, 'ITABERA', '3521705', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20435, 'ITAPEVA', '3522406', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20436, 'ITAPORANGA', '3522802', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20437, 'ITARARE', '3523206', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20438, 'NOVA CAMPINA', '3532827', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20439, 'RIVERSUL', '3543501', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20440, 'TAQUARITUBA', '3553807', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20441, 'TAQUARIVAI', '3553856', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20442, 'ALAMBARI', '3500758', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20443, 'ANGATUBA', '3502200', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20444, 'CAMPINA DO MONTE ALEGRE', '3509452', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20445, 'GUAREI', '3518503', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20446, 'ITAPETININGA', '3522307', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20447, 'BOITUVA', '3507001', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20448, 'CERQUILHO', '3511508', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20449, 'CESARIO LANGE', '3511607', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20450, 'LARANJAL PAULISTA', '3526407', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20451, 'PEREIRAS', '3537503', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20452, 'PORANGABA', '3540507', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20453, 'QUADRA', '3541653', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20454, 'TATUI', '3554003', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20455, 'TORRE DE PEDRA', '3554656', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20456, 'APIAI', '3502705', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20457, 'BARRA DO CHAPEU', '3505351', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20458, 'CAPAO BONITO', '3510203', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20459, 'GUAPIARA', '3517604', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20460, 'IPORANGA', '3521200', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20461, 'ITAOCA', '3522158', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20462, 'ITAPIRAPUA PAULISTA', '3522653', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20463, 'RIBEIRA', '3542800', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20464, 'RIBEIRAO BRANCO', '3543006', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20465, 'RIBEIRAO GRANDE', '3543253', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20466, 'IBIUNA', '3519709', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20467, 'PIEDADE', '3537800', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20468, 'PILAR DO SUL', '3537909', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20469, 'SAO MIGUEL ARCANJO', '3550209', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20470, 'TAPIRAI', '3553500', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20471, 'ALUMINIO', '3501152', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20472, 'ARACARIGUAMA', '3502754', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20473, 'ARACOIABA DA SERRA', '3502903', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20474, 'CABREUVA', '3508405', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20475, 'CAPELA DO ALTO', '3510302', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20476, 'IPERO', '3521002', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20477, 'ITU', '3523909', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20478, 'MAIRINQUE', '3528403', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20479, 'PORTO FELIZ', '3540606', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20480, 'SALTO', '3545209', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20481, 'SALTO DE PIRAPORA', '3545308', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20482, 'SAO ROQUE', '3550605', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20483, 'SARAPUI', '3551108', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20484, 'SOROCABA', '3552205', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20485, 'VOTORANTIM', '3557006', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20486, 'CAMPO LIMPO PAULISTA', '3509601', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20487, 'ITUPEVA', '3524006', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20488, 'JUNDIAI', '3525904', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20489, 'LOUVEIRA', '3527306', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20490, 'VARZEA PAULISTA', '3556503', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20491, 'ATIBAIA', '3504107', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20492, 'BOM JESUS DOS PERDOES', '3507100', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20493, 'BRAGANCA PAULISTA', '3507605', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20494, 'ITATIBA', '3523404', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20495, 'JARINU', '3525201', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20496, 'JOANOPOLIS', '3525508', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20497, 'MORUNGABA', '3532009', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20498, 'NAZARE PAULISTA', '3532405', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20499, 'PIRACAIA', '3538600', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20500, 'TUIUTI', '3554953', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20501, 'VARGEM', '3556354', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20502, 'CAMPOS DO JORDAO', '3509700', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20503, 'MONTEIRO LOBATO', '3531704', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20504, 'SANTO ANTONIO DO PINHAL', '3548203', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20505, 'SAO BENTO DO SAPUCAI', '3548609', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20506, 'CACAPAVA', '3508504', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20507, 'IGARATA', '3520202', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20508, 'JACAREI', '3524402', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20509, 'PINDAMONHANGABA', '3538006', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20510, 'SANTA BRANCA', '3546009', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20511, 'SAO JOSE DOS CAMPOS', '3549904', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20512, 'TAUBATE', '3554102', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20513, 'TREMEMBE', '3554805', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20514, 'APARECIDA', '3502507', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20515, 'CACHOEIRA PAULISTA', '3508603', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20516, 'CANAS', '3509957', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20517, 'CRUZEIRO', '3513405', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20518, 'GUARATINGUETA', '3518404', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20519, 'LAVRINHAS', '3526605', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20520, 'LORENA', '3527207', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20521, 'PIQUETE', '3538501', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20522, 'POTIM', '3540754', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20523, 'QUELUZ', '3541901', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20524, 'ROSEIRA', '3544301', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20525, 'ARAPEI', '3503158', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20526, 'AREIAS', '3503505', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20527, 'BANANAL', '3504909', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20528, 'SAO JOSE DO BARREIRO', '3549607', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20529, 'SILVEIRAS', '3552007', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20530, 'CUNHA', '3513603', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20531, 'JAMBEIRO', '3524907', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20532, 'LAGOINHA', '3526308', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20533, 'NATIVIDADE DA SERRA', '3532306', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20534, 'PARAIBUNA', '3535606', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20535, 'REDENCAO DA SERRA', '3542305', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20536, 'SAO LUIS DO PARAITINGA', '3550001', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20537, 'CARAGUATATUBA', '3510500', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20538, 'ILHABELA', '3520400', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20539, 'SAO SEBASTIAO', '3550704', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20540, 'UBATUBA', '3555406', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20541, 'BARRA DO TURVO', '3505401', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20542, 'CAJATI', '3509254', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20543, 'CANANEIA', '3509908', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20544, 'ELDORADO', '3514809', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20545, 'IGUAPE', '3520301', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20546, 'ILHA COMPRIDA', '3520426', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20547, 'JACUPIRANGA', '3524600', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20548, 'JUQUIA', '3526100', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20549, 'MIRACATU', '3529906', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20550, 'PARIQUERA-ACU', '3536208', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20551, 'REGISTRO', '3542602', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20552, 'SETE BARRAS', '3551801', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20553, 'ITANHAEM', '3522109', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20554, 'ITARIRI', '3523305', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20555, 'MONGAGUA', '3531100', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20556, 'PEDRO DE TOLEDO', '3537206', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20557, 'PERUIBE', '3537602', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20558, 'BARUERI', '3505708', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20559, 'CAJAMAR', '3509205', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20560, 'CARAPICUIBA', '3510609', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20561, 'ITAPEVI', '3522505', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20562, 'JANDIRA', '3525003', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20563, 'OSASCO', '3534401', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20564, 'PIRAPORA DO BOM JESUS', '3539103', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20565, 'SANTANA DE PARNAIBA', '3547304', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20566, 'CAIEIRAS', '3509007', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20567, 'FRANCISCO MORATO', '3516309', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20568, 'FRANCO DA ROCHA', '3516408', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20569, 'MAIRIPORA', '3528502', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20570, 'ARUJA', '3503901', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20571, 'GUARULHOS', '3518800', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20572, 'SANTA ISABEL', '3546801', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20573, 'COTIA', '3513009', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20574, 'EMBU', '3515004', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20575, 'EMBU-GUACU', '3515103', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20576, 'ITAPECERICA DA SERRA', '3522208', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20577, 'JUQUITIBA', '3526209', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20578, 'SAO LOURENCO DA SERRA', '3549953', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20579, 'TABOAO DA SERRA', '3552809', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20580, 'VARGEM GRANDE PAULISTA', '3556453', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20582, 'MAUA', '3529401', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20583, 'RIBEIRAO PIRES', '3543303', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20584, 'RIO GRANDE DA SERRA', '3544103', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20585, 'SANTO ANDRE', '3547809', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20586, 'SAO BERNARDO DO CAMPO', '3548708', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20587, 'SAO CAETANO DO SUL', '3548807', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20589, 'BIRITIBA-MIRIM', '3506607', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20590, 'FERRAZ DE VASCONCELOS', '3515707', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20591, 'GUARAREMA', '3518305', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20592, 'ITAQUAQUECETUBA', '3523107', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20593, 'MOGI DAS CRUZES', '3530607', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20594, 'POA', '3539806', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20595, 'SALESOPOLIS', '3545001', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20596, 'SUZANO', '3552502', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20597, 'BERTIOGA', '3506359', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20598, 'CUBATAO', '3513504', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20599, 'GUARUJA', '3518701', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20600, 'PRAIA GRANDE', '3541000', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20601, 'SANTOS', '3548500', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20602, 'SAO VICENTE', '3551009', 35);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20603, 'ALTO PARANA', '4100608', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20604, 'AMAPORA', '4100905', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20605, 'CRUZEIRO DO SUL', '4106704', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20606, 'DIAMANTE DO NORTE', '4107108', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20607, 'GUAIRACA', '4108908', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20608, 'INAJA', '4110300', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20609, 'ITAUNA DO SUL', '4111308', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20610, 'JARDIM OLINDA', '4112603', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20611, 'LOANDA', '4113502', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20612, 'MARILENA', '4115002', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20613, 'MIRADOR', '4115903', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20614, 'NOVA ALIANCA DO IVAI', '4116505', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20616, 'PARAISO DO NORTE', '4118006', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20617, 'PARANACITY', '4118105', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20618, 'PARANAPOEMA', '4118303', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20619, 'PARANAVAI', '4118402', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20620, 'PLANALTINA DO PARANA', '4119707', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20621, 'PORTO RICO', '4120200', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20622, 'QUERENCIA DO NORTE', '4121000', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20623, 'SANTA CRUZ DE MONTE CASTELO', '4123303', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20624, 'SANTA ISABEL DO IVAI', '4123709', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20625, 'SANTA MONICA', '4123956', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20626, 'SANTO ANTONIO DO CAIUA', '4124202', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20627, 'SAO CARLOS DO IVAI', '4124608', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20628, 'SAO JOAO DO CAIUA', '4124905', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20629, 'SAO PEDRO DO PARANA', '4125902', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20630, 'TAMBOARA', '4126702', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20631, 'TERRA RICA', '4127304', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20632, 'ALTONIA', '4100509', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20633, 'ALTO PIQUIRI', '4100707', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20634, 'BRASILANDIA DO SUL', '4103370', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20635, 'CAFEZAL DO SUL', '4103479', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20636, 'CRUZEIRO DO OESTE', '4106605', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20637, 'DOURADINA', '4107256', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20638, 'ESPERANCA NOVA', '4107520', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20639, 'FRANCISCO ALVES', '4108320', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20640, 'ICARAIMA', '4109906', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20641, 'IPORA', '4110607', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20642, 'IVATE', '4111555', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20643, 'MARIA HELENA', '4114708', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20644, 'MARILUZ', '4115101', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20645, 'NOVA OLIMPIA', '4117206', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20646, 'PEROBAL', '4118857', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20647, 'PEROLA', '4118907', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20648, 'SAO JORGE DO PATROCINIO', '4125357', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20649, 'TAPIRA', '4126900', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20650, 'UMUARAMA', '4128104', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20651, 'ALTO PARAISO', '4128625', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20652, 'XAMBRE', '4128807', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20653, 'CIANORTE', '4105508', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20654, 'CIDADE GAUCHA', '4105607', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20655, 'GUAPOREMA', '4109104', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20656, 'INDIANOPOLIS', '4110409', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20657, 'JAPURA', '4112405', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20658, 'JUSSARA', '4113007', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20659, 'RONDON', '4122602', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20660, 'SAO MANOEL DO PARANA', '4125555', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20661, 'SAO TOME', '4126108', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20662, 'TAPEJARA', '4126801', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20663, 'TUNEIRAS DO OESTE', '4127908', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20664, 'ALTAMIRA DO PARANA', '4100459', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20665, 'BOA ESPERANCA', '4103008', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20666, 'CAMPINA DA LAGOA', '4103909', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20667, 'GOIOERE', '4108601', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20668, 'JANIOPOLIS', '4112207', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20669, 'JURANDA', '4112959', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20670, 'MOREIRA SALES', '4116109', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20671, 'NOVA CANTU', '4116802', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20672, 'QUARTO CENTENARIO', '4120655', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20673, 'RANCHO ALEGRE D OESTE', '4121356', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20674, 'UBIRATA', '4128005', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20675, 'ARARUNA', '4101705', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20676, 'BARBOSA FERRAZ', '4102505', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20678, 'CORUMBATAI DO SUL', '4106555', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20679, 'ENGENHEIRO BELTRAO', '4107504', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20680, 'FAROL', '4107553', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20681, 'FENIX', '4107702', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20682, 'IRETAMA', '4110805', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20683, 'LUIZIANA', '4113734', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20684, 'MAMBORE', '4114005', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20685, 'PEABIRU', '4118808', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20686, 'QUINTA DO SOL', '4121109', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20687, 'RONCADOR', '4122503', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20688, 'TERRA BOA', '4127205', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20689, 'ANGULO', '4101150', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20690, 'ASTORGA', '4102109', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20691, 'ATALAIA', '4102208', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20692, 'CAFEARA', '4103404', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20693, 'CENTENARIO DO SUL', '4105102', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20694, 'COLORADO', '4105904', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20695, 'FLORIDA', '4108106', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20696, 'GUARACI', '4109203', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20697, 'IGUARACU', '4110003', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20698, 'ITAGUAJE', '4110904', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20699, 'JAGUAPITA', '4111902', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20700, 'LOBATO', '4113601', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20701, 'LUPIONOPOLIS', '4113809', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20702, 'MANDAGUACU', '4114104', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20703, 'MUNHOZ DE MELO', '4116307', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20704, 'NOSSA SENHORA DAS GRACAS', '4116406', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20705, 'NOVA ESPERANCA', '4116901', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20706, 'PRESIDENTE CASTELO BRANCO', '4120408', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20707, 'SANTA FE', '4123402', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20708, 'SANTA INES', '4123600', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20709, 'SANTO INACIO', '4124509', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20710, 'UNIFLOR', '4128302', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20711, 'ALVORADA DO SUL', '4100806', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20712, 'BELA VISTA DO PARAISO', '4102802', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20713, 'FLORESTOPOLIS', '4108007', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20714, 'MIRASELVA', '4116000', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20715, 'PORECATU', '4120002', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20716, 'PRADO FERREIRA', '4120333', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20717, 'PRIMEIRO DE MAIO', '4120507', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20718, 'SERTANOPOLIS', '4126504', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20719, 'DOUTOR CAMARGO', '4107306', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20720, 'FLORAI', '4107801', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20721, 'FLORESTA', '4107900', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20722, 'ITAMBE', '4111100', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20723, 'IVATUBA', '4111605', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20724, 'OURIZONA', '4117404', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20725, 'SAO JORGE DO IVAI', '4125308', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20726, 'MANDAGUARI', '4114203', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20727, 'MARIALVA', '4114807', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20728, 'MARINGA', '4115200', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20729, 'PAICANDU', '4117503', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20730, 'SARANDI', '4126256', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20731, 'APUCARANA', '4101408', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20732, 'ARAPONGAS', '4101507', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20733, 'CALIFORNIA', '4103503', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20734, 'CAMBIRA', '4103800', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20735, 'JANDAIA DO SUL', '4112108', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20736, 'MARILANDIA DO SUL', '4114906', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20737, 'MAUA DA SERRA', '4115754', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20738, 'NOVO ITACOLOMI', '4117297', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20739, 'SABAUDIA', '4122701', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20740, 'CAMBE', '4103701', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20741, 'IBIPORA', '4109807', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20742, 'LONDRINA', '4113700', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20743, 'PITANGUEIRAS', '4119657', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20744, 'ROLANDIA', '4122404', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20745, 'TAMARANA', '4126678', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20746, 'BOM SUCESSO', '4103206', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20747, 'BORRAZOPOLIS', '4103305', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20748, 'CRUZMALTINA', '4106852', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20749, 'FAXINAL', '4107603', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20750, 'KALORE', '4113106', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20751, 'MARUMBI', '4115507', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20752, 'RIO BOM', '4122107', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20753, 'ARAPUA', '4101655', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20754, 'ARIRANHA DO IVAI', '4101853', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20755, 'CANDIDO DE ABREU', '4104402', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20756, 'GODOY MOREIRA', '4108551', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20757, 'GRANDES RIOS', '4108700', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20758, 'IVAIPORA', '4111506', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20759, 'JARDIM ALEGRE', '4112504', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20760, 'LIDIANOPOLIS', '4113429', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20761, 'LUNARDELLI', '4113759', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20762, 'MANOEL RIBAS', '4114500', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20763, 'NOVA TEBAS', '4117271', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20764, 'RIO BRANCO DO IVAI', '4122172', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20765, 'ROSARIO DO IVAI', '4122651', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20766, 'SAO JOAO DO IVAI', '4125001', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20767, 'SAO PEDRO DO IVAI', '4125803', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20768, 'ASSAI', '4101903', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20769, 'JATAIZINHO', '4112702', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20770, 'NOVA SANTA BARBARA', '4117214', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20771, 'RANCHO ALEGRE', '4121307', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20772, 'SANTA CECILIA DO PAVAO', '4123204', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20773, 'SAO JERONIMO DA SERRA', '4124707', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20774, 'SAO SEBASTIAO DA AMOREIRA', '4126009', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20775, 'URAI', '4128401', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20776, 'ABATIA', '4100103', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20777, 'ANDIRA', '4101101', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20778, 'BANDEIRANTES', '4102406', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20779, 'CONGONHINHAS', '4106001', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20780, 'CORNELIO PROCOPIO', '4106407', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20781, 'ITAMBARACA', '4111001', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20782, 'LEOPOLIS', '4113403', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20783, 'NOVA AMERICA DA COLINA', '4116604', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20784, 'NOVA FATIMA', '4117008', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20785, 'RIBEIRAO DO PINHAL', '4121901', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20786, 'SANTA AMELIA', '4123105', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20787, 'SANTA MARIANA', '4123907', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20788, 'SANTO ANTONIO DO PARAISO', '4124301', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20789, 'SERTANEJA', '4126405', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20790, 'BARRA DO JACARE', '4102703', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20791, 'CAMBARA', '4103602', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20792, 'JACAREZINHO', '4111803', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20793, 'JUNDIAI DO SUL', '4112900', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20794, 'RIBEIRAO CLARO', '4121802', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20795, 'SANTO ANTONIO DA PLATINA', '4124103', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20796, 'CONSELHEIRO MAIRINCK', '4106100', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20797, 'CURIUVA', '4107009', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20798, 'FIGUEIRA', '4107751', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20799, 'IBAITI', '4109708', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20800, 'JABOTI', '4111704', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20801, 'JAPIRA', '4112306', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20802, 'PINHALAO', '4119202', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20803, 'SAPOPEMA', '4126207', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20804, 'CARLOPOLIS', '4104709', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20805, 'GUAPIRAMA', '4109005', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20806, 'JOAQUIM TAVORA', '4112801', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20808, 'SALTO DO ITARARE', '4122909', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20809, 'SANTANA DO ITARARE', '4124004', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20810, 'SAO JOSE DA BOA VISTA', '4125407', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20811, 'SIQUEIRA CAMPOS', '4126603', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20812, 'TOMAZINA', '4127809', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20813, 'WENCESLAU BRAZ', '4128500', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20814, 'IMBAU', '4110078', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20815, 'ORTIGUEIRA', '4117305', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20816, 'RESERVA', '4121703', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20817, 'TELEMACO BORBA', '4127106', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20818, 'TIBAGI', '4127502', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20819, 'VENTANIA', '4128534', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20820, 'ARAPOTI', '4101606', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20821, 'JAGUARIAIVA', '4112009', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20822, 'PIRAI DO SUL', '4119400', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20823, 'SENGES', '4126306', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20824, 'CARAMBEI', '4104659', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20825, 'CASTRO', '4104907', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20826, 'PALMEIRA', '4117701', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20827, 'PONTA GROSSA', '4119905', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20828, 'ASSIS CHATEAUBRIAND', '4102000', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20829, 'DIAMANTE D OESTE', '4107157', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20830, 'ENTRE RIOS DO OESTE', '4107538', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20831, 'FORMOSA DO OESTE', '4108205', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20832, 'GUAIRA', '4108809', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20833, 'IRACEMA DO OESTE', '4110656', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20834, 'JESUITAS', '4112751', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20835, 'MARECHAL CANDIDO RONDON', '4114609', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20836, 'MARIPA', '4115358', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20837, 'MERCEDES', '4115853', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20838, 'NOVA SANTA ROSA', '4117222', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20839, 'OURO VERDE DO OESTE', '4117453', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20840, 'PALOTINA', '4117909', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20841, 'PATO BRAGADO', '4118451', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20842, 'QUATRO PONTES', '4120853', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20843, 'SANTA HELENA', '4123501', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20844, 'SAO JOSE DAS PALMEIRAS', '4125456', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20845, 'SAO PEDRO DO IGUACU', '4125753', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20846, 'TERRA ROXA', '4127403', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20847, 'TOLEDO', '4127700', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20848, 'TUPASSI', '4127957', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20849, 'ANAHY', '4101051', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20850, 'BOA VISTA DA APARECIDA', '4103057', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20851, 'BRAGANEY', '4103354', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20852, 'CAFELANDIA', '4103453', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20853, 'CAMPO BONITO', '4104055', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20854, 'CAPITAO LEONIDAS MARQUES', '4104600', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20855, 'CASCAVEL', '4104808', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20856, 'CATANDUVAS', '4105003', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20857, 'CORBELIA', '4106308', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20858, 'DIAMANTE DO SUL', '4107124', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20859, 'GUARANIACU', '4109302', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20860, 'IBEMA', '4109757', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20861, 'IGUATU', '4110052', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20862, 'LINDOESTE', '4113452', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20863, 'NOVA AURORA', '4116703', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20864, 'SANTA LUCIA', '4123824', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20865, 'SANTA TEREZA DO OESTE', '4124020', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20866, 'TRES BARRAS DO PARANA', '4127858', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20867, 'CEU AZUL', '4105300', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20868, 'FOZ DO IGUACU', '4108304', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20869, 'ITAIPULANDIA', '4110953', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20870, 'MATELANDIA', '4115606', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20871, 'MEDIANEIRA', '4115804', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20872, 'MISSAL', '4116059', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20873, 'RAMILANDIA', '4121257', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20874, 'SANTA TEREZINHA DE ITAIPU', '4124053', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20875, 'SAO MIGUEL DO IGUACU', '4125704', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20876, 'SERRANOPOLIS DO IGUACU', '4126355', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20877, 'VERA CRUZ DO OESTE', '4128559', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20878, 'AMPERE', '4101002', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20879, 'BELA VISTA DA CAROBA', '4102752', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20880, 'CAPANEMA', '4104501', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20881, 'PEROLA D OESTE', '4119004', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20882, 'PLANALTO', '4119806', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20883, 'PRANCHITA', '4120358', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20884, 'REALEZA', '4121406', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20885, 'SANTA IZABEL DO OESTE', '4123808', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20886, 'BARRACAO', '4102604', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20887, 'BOA ESPERANCA DO IGUACU', '4103024', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20888, 'BOM JESUS DO SUL', '4103156', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20889, 'CRUZEIRO DO IGUACU', '4106571', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20890, 'DOIS VIZINHOS', '4107207', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20891, 'ENEAS MARQUES', '4107405', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20892, 'FLOR DA SERRA DO SUL', '4107850', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20893, 'FRANCISCO BELTRAO', '4108403', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20894, 'MANFRINOPOLIS', '4114351', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20895, 'MARMELEIRO', '4115408', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20896, 'NOVA ESPERANCA DO SUDOESTE', '4116950', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20897, 'NOVA PRATA DO IGUACU', '4117255', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20898, 'PINHAL DE SAO BENTO', '4119251', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20899, 'RENASCENCA', '4121604', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20900, 'SALGADO FILHO', '4122800', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20901, 'SALTO DO LONTRA', '4123006', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20902, 'SANTO ANTONIO DO SUDOESTE', '4124400', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20903, 'SAO JORGE D OESTE', '4125209', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20904, 'VERE', '4128609', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20905, 'BOM SUCESSO DO SUL', '4103222', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20906, 'CHOPINZINHO', '4105409', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20907, 'CORONEL VIVIDA', '4106506', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20908, 'ITAPEJARA D OESTE', '4111209', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20909, 'MARIOPOLIS', '4115309', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20910, 'PATO BRANCO', '4118501', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20911, 'SAO JOAO', '4124806', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20912, 'SAUDADE DO IGUACU', '4126272', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20913, 'SULINA', '4126652', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20914, 'VITORINO', '4128708', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20915, 'BOA VENTURA DE SAO ROQUE', '4103040', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20916, 'LARANJAL', '4113254', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20917, 'MATO RICO', '4115739', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20918, 'PALMITAL', '4117800', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20919, 'PITANGA', '4119608', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20920, 'SANTA MARIA DO OESTE', '4123857', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20921, 'CAMPINA DO SIMAO', '4103958', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20922, 'CANDOI', '4104428', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20923, 'CANTAGALO', '4104451', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20924, 'ESPIGAO ALTO DO IGUACU', '4107546', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20925, 'FOZ DO JORDAO', '4108452', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20926, 'GOIOXIM', '4108650', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20927, 'GUARAPUAVA', '4109401', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20928, 'INACIO MARTINS', '4110201', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20929, 'LARANJEIRAS DO SUL', '4113304', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20930, 'MARQUINHO', '4115457', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20931, 'NOVA LARANJEIRAS', '4117057', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20932, 'PINHAO', '4119301', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20933, 'PORTO BARREIRO', '4120150', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20934, 'QUEDAS DO IGUACU', '4120903', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20935, 'RESERVA DO IGUACU', '4121752', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20936, 'RIO BONITO DO IGUACU', '4122156', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20937, 'TURVO', '4127965', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20938, 'VIRMOND', '4128658', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20939, 'CLEVELANDIA', '4105706', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20940, 'CORONEL DOMINGOS SOARES', '4106456', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20941, 'HONORIO SERPA', '4109658', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20942, 'MANGUEIRINHA', '4114401', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20943, 'PALMAS', '4117602', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20944, 'FERNANDES PINHEIRO', '4107736', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20945, 'GUAMIRANGA', '4108957', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20946, 'IMBITUVA', '4110102', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20947, 'IPIRANGA', '4110508', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20948, 'IVAI', '4111407', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20949, 'PRUDENTOPOLIS', '4120606', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20950, 'TEIXEIRA SOARES', '4127007', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20951, 'IRATI', '4110706', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20952, 'MALLET', '4113908', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20953, 'REBOUCAS', '4121505', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20954, 'RIO AZUL', '4122008', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20955, 'BITURUNA', '4102901', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20956, 'CRUZ MACHADO', '4106803', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20957, 'GENERAL CARNEIRO', '4108502', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20958, 'PAULA FREITAS', '4118600', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20959, 'PAULO FRONTIN', '4118709', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20960, 'PORTO VITORIA', '4120309', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20961, 'UNIAO DA VITORIA', '4128203', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20962, 'ANTONIO OLINTO', '4101309', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20963, 'SAO JOAO DO TRIUNFO', '4125100', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20964, 'SAO MATEUS DO SUL', '4125605', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20965, 'ADRIANOPOLIS', '4100202', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20966, 'CERRO AZUL', '4105201', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20967, 'DOUTOR ULYSSES', '4128633', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20968, 'LAPA', '4113205', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20969, 'PORTO AMAZONAS', '4120101', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20970, 'ALMIRANTE TAMANDARE', '4100400', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20971, 'ARAUCARIA', '4101804', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20972, 'BALSA NOVA', '4102307', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20973, 'BOCAIUVA DO SUL', '4103107', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20974, 'CAMPINA GRANDE DO SUL', '4104006', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20975, 'CAMPO LARGO', '4104204', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20976, 'CAMPO MAGRO', '4104253', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20977, 'COLOMBO', '4105805', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20978, 'CONTENDA', '4106209', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20979, 'CURITIBA', '4106902', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20980, 'FAZENDA RIO GRANDE', '4107652', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20981, 'ITAPERUCU', '4111258', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20982, 'MANDIRITUBA', '4114302', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20983, 'PINHAIS', '4119152', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20984, 'PIRAQUARA', '4119509', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20985, 'QUATRO BARRAS', '4120804', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20986, 'RIO BRANCO DO SUL', '4122206', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20988, 'TUNAS DO PARANA', '4127882', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20989, 'ANTONINA', '4101200', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20990, 'GUARAQUECABA', '4109500', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20991, 'GUARATUBA', '4109609', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20992, 'MATINHOS', '4115705', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20993, 'MORRETES', '4116208', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20994, 'PARANAGUA', '4118204', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20995, 'PONTAL DO PARANA', '4119954', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20996, 'AGUDOS DO SUL', '4100301', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20997, 'CAMPO DO TENENTE', '4104105', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20998, 'PIEN', '4119103', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (20999, 'QUITANDINHA', '4121208', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21000, 'RIO NEGRO', '4122305', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21001, 'TIJUCAS DO SUL', '4127601', 41);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21002, 'ANCHIETA', '4200804', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21003, 'BANDEIRANTE', '4202081', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21004, 'BARRA BONITA', '4202099', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21005, 'BELMONTE', '4202156', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21006, 'DESCANSO', '4204905', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21007, 'DIONISIO CERQUEIRA', '4205001', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21008, 'GUARACIABA', '4206405', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21009, 'GUARUJA DO SUL', '4206603', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21010, 'IPORA DO OESTE', '4207650', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21011, 'ITAPIRANGA', '4208401', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21012, 'MONDAI', '4211009', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21013, 'PALMA SOLA', '4212007', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21014, 'PARAISO', '4212239', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21015, 'PRINCESA', '4214151', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21016, 'RIQUEZA', '4215075', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21017, 'ROMELANDIA', '4215208', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21018, 'SANTA HELENA', '4215554', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21019, 'SAO JOAO DO OESTE', '4216255', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21020, 'SAO JOSE DO CEDRO', '4216701', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21021, 'SAO MIGUEL DO OESTE', '4217204', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21022, 'TUNAPOLIS', '4218756', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21023, 'AGUAS DE CHAPECO', '4200507', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21024, 'AGUAS FRIAS', '4200556', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21025, 'BOM JESUS DO OESTE', '4202578', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21026, 'CAIBI', '4203105', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21027, 'CAMPO ERE', '4203501', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21028, 'CAXAMBU DO SUL', '4204103', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21029, 'CHAPECO', '4204202', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21030, 'CORDILHEIRA ALTA', '4204350', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21031, 'CORONEL FREITAS', '4204400', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21032, 'CUNHA PORA', '4204707', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21033, 'CUNHATAI', '4204756', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21034, 'FLOR DO SERTAO', '4205357', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21035, 'FORMOSA DO SUL', '4205431', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21036, 'GUATAMBU', '4206652', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21037, 'IRACEMINHA', '4207759', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21038, 'IRATI', '4207858', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21039, 'JARDINOPOLIS', '4208955', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21040, 'MARAVILHA', '4210506', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21041, 'MODELO', '4210902', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21042, 'NOVA ERECHIM', '4211405', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21043, 'NOVA ITABERABA', '4211454', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21044, 'NOVO HORIZONTE', '4211652', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21045, 'PALMITOS', '4212106', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21046, 'PINHALZINHO', '4212908', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21047, 'PLANALTO ALEGRE', '4213153', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21048, 'QUILOMBO', '4214201', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21049, 'SALTINHO', '4215356', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21050, 'SANTA TEREZINHA DO PROGRESSO', '4215687', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21051, 'SANTIAGO DO SUL', '4215695', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21052, 'SAO BERNARDINO', '4215752', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21053, 'SAO CARLOS', '4216008', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21054, 'SAO LOURENCO DO OESTE', '4216909', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21055, 'SAO MIGUEL DA BOA VISTA', '4217154', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21056, 'SAUDADES', '4217303', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21057, 'SERRA ALTA', '4217550', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21058, 'SUL BRASIL', '4217758', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21059, 'TIGRINHOS', '4217956', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21060, 'UNIAO DO OESTE', '4218855', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21061, 'ABELARDO LUZ', '4200101', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21062, 'BOM JESUS', '4202537', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21063, 'CORONEL MARTINS', '4204459', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21064, 'ENTRE RIOS', '4205175', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21065, 'FAXINAL DOS GUEDES', '4205308', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21066, 'GALVAO', '4205605', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21067, 'IPUACU', '4207684', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21068, 'JUPIA', '4209177', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21069, 'LAJEADO GRANDE', '4209458', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21070, 'MAREMA', '4210555', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21071, 'OURO VERDE', '4211850', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21072, 'PASSOS MAIA', '4212270', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21073, 'PONTE SERRADA', '4213401', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21074, 'SAO DOMINGOS', '4216107', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21075, 'VARGEAO', '4219101', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21076, 'XANXERE', '4219507', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21077, 'XAXIM', '4219705', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21078, 'AGUA DOCE', '4200408', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21079, 'ARROIO TRINTA', '4201604', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21080, 'CACADOR', '4203006', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21081, 'CALMON', '4203154', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21082, 'CAPINZAL', '4203907', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21083, 'CATANDUVAS', '4204004', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21084, 'ERVAL VELHO', '4205209', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21085, 'FRAIBURGO', '4205506', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21086, 'HERVAL D OESTE', '4206702', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21087, 'IBIAM', '4206751', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21088, 'IBICARE', '4206801', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21089, 'IOMERE', '4207577', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21090, 'JABORA', '4208609', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21091, 'JOACABA', '4209003', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21092, 'LACERDOPOLIS', '4209201', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21093, 'LEBON REGIS', '4209706', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21094, 'LUZERNA', '4210035', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21095, 'MACIEIRA', '4210050', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21096, 'MATOS COSTA', '4210704', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21097, 'OURO', '4211801', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21098, 'PINHEIRO PRETO', '4213005', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21099, 'RIO DAS ANTAS', '4214409', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21100, 'SALTO VELOSO', '4215406', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21101, 'TANGARA', '4217907', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21102, 'TREZE TILIAS', '4218509', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21103, 'VARGEM BONITA', '4219176', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21104, 'VIDEIRA', '4219309', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21105, 'ALTO BELA VISTA', '4200754', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21106, 'ARABUTA', '4201273', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21107, 'ARVOREDO', '4201653', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21108, 'CONCORDIA', '4204301', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21109, 'IPIRA', '4207601', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21110, 'IPUMIRIM', '4207700', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21111, 'IRANI', '4207809', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21112, 'ITA', '4208005', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21113, 'LINDOIA DO SUL', '4209854', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21114, 'PAIAL', '4211876', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21115, 'PERITIBA', '4212601', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21116, 'PIRATUBA', '4213104', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21117, 'PRESIDENTE CASTELLO BRANCO', '4213906', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21118, 'SEARA', '4217501', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21119, 'XAVANTINA', '4219606', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21120, 'BELA VISTA DO TOLDO', '4202131', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21121, 'CANOINHAS', '4203808', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21122, 'IRINEOPOLIS', '4207908', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21123, 'ITAIOPOLIS', '4208104', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21124, 'MAFRA', '4210100', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21125, 'MAJOR VIEIRA', '4210308', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21126, 'MONTE CASTELO', '4211108', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21127, 'PAPANDUVA', '4212205', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21128, 'PORTO UNIAO', '4213609', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21129, 'SANTA TEREZINHA', '4215679', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21130, 'TIMBO GRANDE', '4218251', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21131, 'TRES BARRAS', '4218301', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21132, 'CAMPO ALEGRE', '4203303', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21133, 'RIO NEGRINHO', '4215000', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21134, 'SAO BENTO DO SUL', '4215802', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21135, 'ARAQUARI', '4201307', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21136, 'BALNEARIO BARRA DO SUL', '4202057', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21137, 'CORUPA', '4204509', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21138, 'GARUVA', '4205803', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21139, 'GUARAMIRIM', '4206504', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21140, 'ITAPOA', '4208450', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21141, 'JARAGUA DO SUL', '4208906', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21142, 'JOINVILLE', '4209102', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21143, 'MASSARANDUBA', '4210605', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21144, 'SAO FRANCISCO DO SUL', '4216206', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21145, 'SCHROEDER', '4217402', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21146, 'ABDON BATISTA', '4200051', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21147, 'BRUNOPOLIS', '4202875', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21148, 'CAMPOS NOVOS', '4203600', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21149, 'CURITIBANOS', '4204806', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21150, 'FREI ROGERIO', '4205555', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21151, 'MONTE CARLO', '4211058', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21152, 'PONTE ALTA', '4213302', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21153, 'PONTE ALTA DO NORTE', '4213351', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21154, 'SANTA CECILIA', '4215505', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21155, 'SAO CRISTOVAO DO SUL', '4216057', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21156, 'VARGEM', '4219150', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21157, 'ZORTEA', '4219853', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21158, 'ANITA GARIBALDI', '4201000', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21159, 'BOCAINA DO SUL', '4202438', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21160, 'BOM JARDIM DA SERRA', '4202503', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21161, 'BOM RETIRO', '4202602', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21162, 'CAPAO ALTO', '4203253', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21163, 'CAMPO BELO DO SUL', '4203402', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21164, 'CELSO RAMOS', '4204152', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21165, 'CERRO NEGRO', '4204178', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21166, 'CORREIA PINTO', '4204558', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21167, 'LAGES', '4209300', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21168, 'OTACILIO COSTA', '4211751', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21169, 'PAINEL', '4211892', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21170, 'PALMEIRA', '4212056', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21171, 'RIO RUFINO', '4215059', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21172, 'SAO JOAQUIM', '4216503', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21173, 'SAO JOSE DO CERRITO', '4216800', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21174, 'URUBICI', '4218905', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21175, 'URUPEMA', '4218954', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21176, 'AGRONOMICA', '4200309', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21177, 'AURORA', '4201901', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21178, 'BRACO DO TROMBUDO', '4202859', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21179, 'DONA EMMA', '4205100', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21180, 'IBIRAMA', '4206900', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21181, 'JOSE BOITEUX', '4209151', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21182, 'LAURENTINO', '4209508', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21183, 'LONTRAS', '4209904', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21184, 'MIRIM DOCE', '4210852', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21185, 'POUSO REDONDO', '4213708', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21186, 'PRESIDENTE GETULIO', '4214003', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21187, 'PRESIDENTE NEREU', '4214102', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21188, 'RIO DO CAMPO', '4214508', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21189, 'RIO DO OESTE', '4214607', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21190, 'RIO DO SUL', '4214805', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21191, 'SALETE', '4215307', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21192, 'TAIO', '4217808', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21193, 'TROMBUDO CENTRAL', '4218608', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21194, 'VITOR MEIRELES', '4219358', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21195, 'WITMARSUM', '4219408', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21196, 'APIUNA', '4201257', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21197, 'ASCURRA', '4201703', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21198, 'BENEDITO NOVO', '4202206', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21199, 'BLUMENAU', '4202404', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21200, 'BOTUVERA', '4202701', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21201, 'BRUSQUE', '4202909', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21202, 'DOUTOR PEDRINHO', '4205159', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21203, 'GASPAR', '4205902', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21204, 'GUABIRUBA', '4206306', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21205, 'INDAIAL', '4207502', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21206, 'LUIZ ALVES', '4210001', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21207, 'POMERODE', '4213203', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21208, 'RIO DOS CEDROS', '4214706', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21209, 'RODEIO', '4215109', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21210, 'TIMBO', '4218202', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21211, 'BALNEARIO CAMBORIU', '4202008', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21212, 'BARRA VELHA', '4202107', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21213, 'BOMBINHAS', '4202453', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21214, 'CAMBORIU', '4203204', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21215, 'ILHOTA', '4207106', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21216, 'ITAJAI', '4208203', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21217, 'ITAPEMA', '4208302', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21218, 'NAVEGANTES', '4211306', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21219, 'PENHA', '4212502', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21220, 'BALNEARIO PICARRAS', '4212809', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21221, 'PORTO BELO', '4213500', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21222, 'SAO JOAO DO ITAPERIU', '4216354', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21223, 'AGROLANDIA', '4200200', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21224, 'ATALANTA', '4201802', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21225, 'CHAPADAO DO LAGEADO', '4204194', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21226, 'IMBUIA', '4207403', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21227, 'ITUPORANGA', '4208500', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21228, 'PETROLANDIA', '4212700', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21229, 'VIDAL RAMOS', '4219200', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21230, 'ANGELINA', '4200903', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21231, 'CANELINHA', '4203709', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21232, 'LEOBERTO LEAL', '4209805', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21233, 'MAJOR GERCINO', '4210209', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21234, 'NOVA TRENTO', '4211504', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21235, 'SAO JOAO BATISTA', '4216305', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21236, 'TIJUCAS', '4218004', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21237, 'ANTONIO CARLOS', '4201208', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21238, 'BIGUACU', '4202305', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21240, 'GOVERNADOR CELSO RAMOS', '4206009', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21241, 'PALHOCA', '4211900', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21242, 'PAULO LOPES', '4212304', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21243, 'SANTO AMARO DA IMPERATRIZ', '4215703', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21244, 'SAO JOSE', '4216602', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21245, 'SAO PEDRO DE ALCANTARA', '4217253', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21246, 'AGUAS MORNAS', '4200606', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21247, 'ALFREDO WAGNER', '4200705', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21248, 'ANITAPOLIS', '4201109', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21249, 'RANCHO QUEIMADO', '4214300', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21250, 'SAO BONIFACIO', '4215901', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21251, 'ARMAZEM', '4201505', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21252, 'BRACO DO NORTE', '4202800', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21253, 'CAPIVARI DE BAIXO', '4203956', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21254, 'GAROPABA', '4205704', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21255, 'GRAO PARA', '4206108', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21256, 'GRAVATAL', '4206207', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21257, 'IMARUI', '4207205', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21258, 'IMBITUBA', '4207304', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21259, 'JAGUARUNA', '4208807', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21260, 'LAGUNA', '4209409', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21261, 'ORLEANS', '4211702', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21262, 'PEDRAS GRANDES', '4212403', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21263, 'RIO FORTUNA', '4214904', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21264, 'SANGAO', '4215455', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21265, 'SANTA ROSA DE LIMA', '4215604', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21266, 'SAO LUDGERO', '4217006', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21267, 'SAO MARTINHO', '4217105', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21268, 'TREZE DE MAIO', '4218400', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21269, 'TUBARAO', '4218707', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21270, 'COCAL DO SUL', '4204251', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21271, 'CRICIUMA', '4204608', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21272, 'FORQUILHINHA', '4205456', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21273, 'ICARA', '4207007', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21274, 'LAURO MULLER', '4209607', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21275, 'MORRO DA FUMACA', '4211207', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21276, 'NOVA VENEZA', '4211603', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21277, 'SIDEROPOLIS', '4217600', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21278, 'TREVISO', '4218350', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21279, 'URUSSANGA', '4219002', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21280, 'ARARANGUA', '4201406', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21281, 'BALNEARIO ARROIO DO SILVA', '4201950', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21282, 'BALNEARIO GAIVOTA', '4202073', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21283, 'ERMO', '4205191', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21284, 'JACINTO MACHADO', '4208708', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21285, 'MARACAJA', '4210407', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21286, 'MELEIRO', '4210803', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21287, 'MORRO GRANDE', '4211256', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21288, 'PASSO DE TORRES', '4212254', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21289, 'PRAIA GRANDE', '4213807', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21290, 'SANTA ROSA DO SUL', '4215653', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21291, 'SAO JOAO DO SUL', '4216404', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21292, 'SOMBRIO', '4217709', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21293, 'TIMBE DO SUL', '4218103', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21294, 'TURVO', '4218806', 42);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21295, 'ALECRIM', '4300307', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21296, 'CANDIDO GODOI', '4304309', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21297, 'INDEPENDENCIA', '4310405', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21298, 'NOVO MACHADO', '4313425', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21299, 'PORTO LUCENA', '4315008', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21300, 'PORTO MAUA', '4315057', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21301, 'PORTO VERA CRUZ', '4315073', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21302, 'SANTA ROSA', '4317202', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21303, 'SANTO CRISTO', '4317905', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21304, 'SAO JOSE DO INHACORA', '4318499', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21305, 'TRES DE MAIO', '4321808', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21306, 'TUCUNDUVA', '4322103', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21307, 'TUPARENDI', '4322301', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21308, 'BARRA DO GUARITA', '4301859', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21309, 'BOA VISTA DO BURICA', '4302204', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21310, 'BOM PROGRESSO', '4302378', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21311, 'BRAGA', '4302600', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21312, 'CAMPO NOVO', '4304002', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21313, 'CRISSIUMAL', '4306007', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21314, 'DERRUBADAS', '4306320', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21315, 'DOUTOR MAURICIO CARDOSO', '4306734', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21316, 'ESPERANCA DO SUL', '4307450', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21317, 'HORIZONTINA', '4309605', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21318, 'HUMAITA', '4309704', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21319, 'MIRAGUAI', '4312302', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21320, 'NOVA CANDELARIA', '4313011', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21321, 'REDENTORA', '4315404', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21322, 'SAO MARTINHO', '4319109', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21323, 'SEDE NOVA', '4320230', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21324, 'TENENTE PORTELA', '4321402', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21325, 'TIRADENTES DO SUL', '4321477', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21326, 'TRES PASSOS', '4321907', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21327, 'VISTA GAUCHA', '4323705', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21328, 'ALPESTRE', '4300505', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21329, 'AMETISTA DO SUL', '4300646', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21330, 'CAICARA', '4303400', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21331, 'CONSTANTINA', '4305801', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21332, 'CRISTAL DO SUL', '4306072', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21333, 'DOIS IRMAOS DAS MISSOES', '4306429', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21334, 'ENGENHO VELHO', '4306924', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21335, 'ERVAL SECO', '4307302', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21336, 'FREDERICO WESTPHALEN', '4308508', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21337, 'GRAMADO DOS LOUREIROS', '4309126', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21338, 'IRAI', '4310504', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21339, 'LIBERATO SALZANO', '4311601', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21340, 'NONOAI', '4312708', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21341, 'NOVO TIRADENTES', '4313441', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21342, 'NOVO XINGU', '4313466', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21343, 'PALMITINHO', '4313805', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21344, 'PINHEIRINHO DO VALE', '4314498', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21345, 'PLANALTO', '4314704', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21346, 'RIO DOS INDIOS', '4315552', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21347, 'RODEIO BONITO', '4315909', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21348, 'RONDINHA', '4316204', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21349, 'SEBERI', '4320206', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21350, 'TAQUARUCU DO SUL', '4321329', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21351, 'TRES PALMEIRAS', '4321857', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21352, 'TRINDADE DO SUL', '4321956', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21353, 'VICENTE DUTRA', '4323101', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21354, 'VISTA ALEGRE', '4323507', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21355, 'ARATIBA', '4300901', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21356, 'AUREA', '4301552', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21357, 'BARAO DE COTEGIPE', '4301701', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21358, 'BARRA DO RIO AZUL', '4301925', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21359, 'BENJAMIN CONSTANT DO SUL', '4302055', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21360, 'CAMPINAS DO SUL', '4303806', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21361, 'CARLOS GOMES', '4304853', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21362, 'CENTENARIO', '4305116', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21363, 'CRUZALTENSE', '4306130', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21364, 'ENTRE RIOS DO SUL', '4306957', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21365, 'EREBANGO', '4306973', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21366, 'ERECHIM', '4307005', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21367, 'ERVAL GRANDE', '4307203', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21368, 'ESTACAO', '4307559', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21369, 'FAXINALZINHO', '4308052', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21370, 'FLORIANO PEIXOTO', '4308250', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21371, 'GAURAMA', '4308706', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21372, 'GETULIO VARGAS', '4308904', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21373, 'IPIRANGA DO SUL', '4310462', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21374, 'ITATIBA DO SUL', '4310702', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21375, 'JACUTINGA', '4310900', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21376, 'MARCELINO RAMOS', '4311908', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21377, 'MARIANO MORO', '4312005', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21378, 'PAULO BENTO', '4314134', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21379, 'PONTE PRETA', '4314787', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21380, 'QUATRO IRMAOS', '4315313', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21381, 'SAO VALENTIM', '4319703', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21382, 'SEVERIANO DE ALMEIDA', '4320602', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21383, 'TRES ARROIOS', '4321634', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21384, 'VIADUTOS', '4322905', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21385, 'BARRACAO', '4301800', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21386, 'CACIQUE DOBLE', '4303202', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21387, 'IBIACA', '4309803', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21388, 'MACHADINHO', '4311700', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21389, 'MAXIMILIANO DE ALMEIDA', '4312203', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21390, 'PAIM FILHO', '4313607', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21391, 'SANANDUVA', '4316600', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21392, 'SANTO EXPEDITO DO SUL', '4317954', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21393, 'SAO JOAO DA URTIGA', '4318424', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21394, 'SAO JOSE DO OURO', '4318606', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21395, 'TUPANCI DO SUL', '4322186', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21396, 'CAIBATE', '4303301', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21397, 'CAMPINA DAS MISSOES', '4303707', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21398, 'CERRO LARGO', '4305207', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21399, 'GUARANI DAS MISSOES', '4309506', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21400, 'MATO QUEIMADO', '4312179', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21401, 'PORTO XAVIER', '4315107', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21402, 'ROQUE GONZALES', '4316303', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21403, 'SALVADOR DAS MISSOES', '4316477', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21404, 'SAO PAULO DAS MISSOES', '4319307', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21405, 'SAO PEDRO DO BUTIA', '4319372', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21406, 'SETE DE SETEMBRO', '4320578', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21407, 'BOSSOROCA', '4302501', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21408, 'CATUIPE', '4305009', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21409, 'DEZESSEIS DE NOVEMBRO', '4306353', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21410, 'ENTRE-IJUIS', '4306932', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21411, 'EUGENIO DE CASTRO', '4307831', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21412, 'GIRUA', '4309001', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21413, 'PIRAPO', '4314555', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21414, 'ROLADOR', '4315958', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21415, 'SANTO ANGELO', '4317509', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21416, 'SANTO ANTONIO DAS MISSOES', '4317707', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21417, 'SAO LUIZ GONZAGA', '4318903', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21418, 'SAO MIGUEL DAS MISSOES', '4319158', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21419, 'SAO NICOLAU', '4319208', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21420, 'SENADOR SALGADO FILHO', '4320321', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21421, 'UBIRETAMA', '4322343', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21422, 'VITORIA DAS MISSOES', '4323754', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21423, 'AJURICABA', '4300208', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21424, 'ALEGRIA', '4300455', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21425, 'AUGUSTO PESTANA', '4301503', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21426, 'BOZANO', '4302584', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21427, 'CHIAPETTA', '4305405', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21428, 'CONDOR', '4305702', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21429, 'CORONEL BARROS', '4305871', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21430, 'CORONEL BICACO', '4305900', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21431, 'IJUI', '4310207', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21432, 'INHACORA', '4310413', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21433, 'NOVA RAMADA', '4313334', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21434, 'PANAMBI', '4313904', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21435, 'PEJUCARA', '4314308', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21436, 'SANTO AUGUSTO', '4317806', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21437, 'SAO VALERIO DO SUL', '4319737', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21438, 'ALMIRANTE TAMANDARE DO SUL', '4300471', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21439, 'BARRA FUNDA', '4301958', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21440, 'BOA VISTA DAS MISSOES', '4302154', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21441, 'CARAZINHO', '4304705', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21442, 'CERRO GRANDE', '4305157', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21443, 'CHAPADA', '4305306', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21444, 'COQUEIROS DO SUL', '4305850', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21445, 'JABOTICABA', '4310850', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21446, 'LAJEADO DO BUGRE', '4311429', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21447, 'NOVA BOA VISTA', '4312955', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21448, 'NOVO BARREIRO', '4313490', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21449, 'PALMEIRA DAS MISSOES', '4313706', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21450, 'PINHAL', '4314456', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21451, 'SAGRADA FAMILIA', '4316428', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21452, 'SANTO ANTONIO DO PLANALTO', '4317756', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21453, 'SAO JOSE DAS MISSOES', '4318457', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21454, 'SAO PEDRO DAS MISSOES', '4319364', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21455, 'SARANDI', '4320107', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21456, 'AGUA SANTA', '4300059', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21457, 'CAMARGO', '4303558', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21458, 'CASCA', '4304903', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21459, 'CASEIROS', '4304952', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21460, 'CHARRUA', '4305371', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21461, 'CIRIACO', '4305504', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21462, 'COXILHA', '4305975', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21463, 'DAVID CANABARRO', '4306304', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21464, 'ERNESTINA', '4307054', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21465, 'GENTIL', '4308854', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21466, 'IBIRAIARAS', '4309902', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21467, 'MARAU', '4311809', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21468, 'MATO CASTELHANO', '4312138', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21469, 'MULITERNO', '4312625', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21470, 'NICOLAU VERGUEIRO', '4312674', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21471, 'PASSO FUNDO', '4314100', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21472, 'PONTAO', '4314779', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21473, 'RONDA ALTA', '4316105', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21474, 'SANTA CECILIA DO SUL', '4316733', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21475, 'SANTO ANTONIO DO PALMA', '4317558', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21476, 'SAO DOMINGOS DO SUL', '4318051', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21477, 'SERTAO', '4320503', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21478, 'TAPEJARA', '4320909', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21479, 'VANINI', '4322558', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21480, 'VILA LANGARO', '4323358', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21481, 'VILA MARIA', '4323408', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21482, 'ALTO ALEGRE', '4300554', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21483, 'BOA VISTA DO CADEADO', '4302220', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21484, 'BOA VISTA DO INCRA', '4302238', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21485, 'CAMPOS BORGES', '4304101', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21486, 'CRUZ ALTA', '4306106', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21487, 'ESPUMOSO', '4307500', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21488, 'FORTALEZA DOS VALOS', '4308458', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21489, 'IBIRUBA', '4310009', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21490, 'JACUIZINHO', '4310876', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21491, 'JOIA', '4311155', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21492, 'QUINZE DE NOVEMBRO', '4315354', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21493, 'SALDANHA MARINHO', '4316436', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21494, 'SALTO DO JACUI', '4316451', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21495, 'SANTA BARBARA DO SUL', '4316709', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21496, 'COLORADO', '4305603', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21497, 'LAGOA DOS TRES CANTOS', '4311270', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21498, 'NAO-ME-TOQUE', '4312658', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21499, 'SELBACH', '4320305', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21500, 'TAPERA', '4321006', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21501, 'TIO HUGO', '4321469', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21502, 'VICTOR GRAEFF', '4323200', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21503, 'BARROS CASSAL', '4302006', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21504, 'FONTOURA XAVIER', '4308300', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21505, 'IBIRAPUITA', '4309951', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21506, 'LAGOAO', '4311254', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21507, 'MORMACO', '4312427', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21508, 'SAO JOSE DO HERVAL', '4318465', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21509, 'SOLEDADE', '4320800', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21510, 'TUNAS', '4322152', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21511, 'ANDRE DA ROCHA', '4300661', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21512, 'ANTA GORDA', '4300703', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21513, 'ARVOREZINHA', '4301404', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21514, 'DOIS LAJEADOS', '4306452', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21515, 'GUABIJU', '4309258', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21516, 'GUAPORE', '4309407', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21517, 'ILOPOLIS', '4310306', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21518, 'ITAPUCA', '4310579', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21519, 'MONTAURI', '4312351', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21520, 'NOVA ALVORADA', '4312757', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21521, 'NOVA ARACA', '4312807', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21522, 'NOVA BASSANO', '4312906', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21523, 'NOVA PRATA', '4313300', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21524, 'PARAI', '4314001', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21525, 'PROTASIO ALVES', '4315172', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21526, 'PUTINGA', '4315206', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21527, 'SAO JORGE', '4318440', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21528, 'SAO VALENTIM DO SUL', '4319711', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21529, 'SERAFINA CORREA', '4320404', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21530, 'UNIAO DA SERRA', '4322350', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21531, 'VISTA ALEGRE DO PRATA', '4323606', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21532, 'BOM JESUS', '4302303', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21533, 'CAMBARA DO SUL', '4303608', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21534, 'CAMPESTRE DA SERRA', '4303673', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21535, 'CAPAO BONITO DO SUL', '4304622', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21536, 'ESMERALDA', '4307401', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21537, 'IPE', '4310439', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21538, 'JAQUIRANA', '4311122', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21539, 'LAGOA VERMELHA', '4311304', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21540, 'MONTE ALEGRE DOS CAMPOS', '4312377', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21541, 'MUITOS CAPOES', '4312617', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21542, 'PINHAL DA SERRA', '4314464', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21543, 'SAO FRANCISCO DE PAULA', '4318200', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21544, 'SAO JOSE DOS AUSENTES', '4318622', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21545, 'VACARIA', '4322509', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21546, 'ANTONIO PRADO', '4300802', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21547, 'BENTO GONCALVES', '4302105', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21548, 'BOA VISTA DO SUL', '4302253', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21549, 'CARLOS BARBOSA', '4304804', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21550, 'CAXIAS DO SUL', '4305108', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21551, 'CORONEL PILAR', '4305934', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21552, 'COTIPORA', '4305959', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21553, 'FAGUNDES VARELA', '4307864', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21554, 'FARROUPILHA', '4307906', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21555, 'FLORES DA CUNHA', '4308201', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21556, 'GARIBALDI', '4308607', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21557, 'MONTE BELO DO SUL', '4312385', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21558, 'NOVA PADUA', '4313086', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21559, 'NOVA ROMA DO SUL', '4313359', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21560, 'SANTA TEREZA', '4317251', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21561, 'SAO MARCOS', '4319000', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21562, 'VERANOPOLIS', '4322806', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21563, 'VILA FLORES', '4323309', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21564, 'CAPAO DO CIPO', '4304655', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21565, 'ITACURUBI', '4310553', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21566, 'JARI', '4311130', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21567, 'JULIO DE CASTILHOS', '4311205', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21568, 'PINHAL GRANDE', '4314472', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21569, 'QUEVEDOS', '4315321', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21570, 'SANTIAGO', '4317400', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21571, 'TUPANCIRETA', '4322202', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21572, 'UNISTALDA', '4322376', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21573, 'CACEQUI', '4302907', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21574, 'DILERMANDO DE AGUIAR', '4306379', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21575, 'ITAARA', '4310538', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21576, 'JAGUARI', '4311106', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21577, 'MATA', '4312104', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21578, 'NOVA ESPERANCA DO SUL', '4313037', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21579, 'SANTA MARIA', '4316907', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21580, 'SAO MARTINHO DA SERRA', '4319125', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21581, 'SAO PEDRO DO SUL', '4319406', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21582, 'SAO SEPE', '4319604', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21583, 'SAO VICENTE DO SUL', '4319802', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21584, 'TOROPI', '4321493', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21585, 'VILA NOVA DO SUL', '4323457', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21586, 'AGUDO', '4300109', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21587, 'DONA FRANCISCA', '4306700', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21588, 'FAXINAL DO SOTURNO', '4308003', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21589, 'FORMIGUEIRO', '4308409', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21590, 'IVORA', '4310751', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21591, 'NOVA PALMA', '4313102', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21592, 'RESTINGA SECA', '4315503', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21593, 'SAO JOAO DO POLESINE', '4318432', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21594, 'SILVEIRA MARTINS', '4320651', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21595, 'ARROIO DO TIGRE', '4301206', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21596, 'CANDELARIA', '4304200', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21597, 'ESTRELA VELHA', '4307815', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21598, 'GRAMADO XAVIER', '4309159', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21599, 'HERVEIRAS', '4309571', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21600, 'IBARAMA', '4309753', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21601, 'LAGOA BONITA DO SUL', '4311239', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21602, 'MATO LEITAO', '4312153', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21603, 'PASSA SETE', '4314068', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21604, 'SANTA CRUZ DO SUL', '4316808', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21605, 'SEGREDO', '4320263', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21606, 'SINIMBU', '4320677', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21607, 'SOBRADINHO', '4320701', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21608, 'VALE DO SOL', '4322533', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21609, 'VENANCIO AIRES', '4322608', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21610, 'VERA CRUZ', '4322707', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21611, 'ARROIO DO MEIO', '4301008', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21612, 'BOM RETIRO DO SUL', '4302402', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21613, 'BOQUEIRAO DO LEAO', '4302451', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21614, 'CANUDOS DO VALE', '4304614', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21615, 'CAPITAO', '4304697', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21616, 'COLINAS', '4305587', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21617, 'COQUEIRO BAIXO', '4305835', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21618, 'CRUZEIRO DO SUL', '4306205', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21619, 'DOUTOR RICARDO', '4306759', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21620, 'ENCANTADO', '4306809', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21621, 'ESTRELA', '4307807', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21622, 'FAZENDA VILANOVA', '4308078', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21623, 'FORQUETINHA', '4308433', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21624, 'IMIGRANTE', '4310363', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21625, 'LAJEADO', '4311403', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21626, 'MARQUES DE SOUZA', '4312054', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21627, 'MUCUM', '4312609', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21628, 'NOVA BRESCIA', '4313003', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21629, 'PAVERAMA', '4314159', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21630, 'POUSO NOVO', '4315131', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21631, 'PROGRESSO', '4315156', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21632, 'RELVADO', '4315453', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21633, 'ROCA SALES', '4315800', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21634, 'SANTA CLARA DO SUL', '4316758', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21635, 'SERIO', '4320453', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21636, 'TABAI', '4320859', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21637, 'TAQUARI', '4321303', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21638, 'TEUTONIA', '4321451', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21639, 'TRAVESSEIRO', '4321626', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21640, 'VESPASIANO CORREA', '4322855', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21641, 'WESTFALIA', '4323770', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21642, 'CACHOEIRA DO SUL', '4303004', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21643, 'CERRO BRANCO', '4305132', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21644, 'NOVO CABRAIS', '4313391', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21645, 'PANTANO GRANDE', '4313953', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21646, 'PARAISO DO SUL', '4314027', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21647, 'PASSO DO SOBRADO', '4314076', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21648, 'RIO PARDO', '4315701', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21649, 'ALTO FELIZ', '4300570', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21650, 'BARAO', '4301651', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21651, 'BOM PRINCIPIO', '4302352', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21652, 'BROCHIER', '4302659', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21653, 'CAPELA DE SANTANA', '4304689', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21654, 'FELIZ', '4308102', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21655, 'HARMONIA', '4309555', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21656, 'LINHA NOVA', '4311643', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21657, 'MARATA', '4311791', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21658, 'MONTENEGRO', '4312401', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21659, 'PARECI NOVO', '4314035', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21660, 'POCO DAS ANTAS', '4314753', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21661, 'PORTAO', '4314803', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21662, 'SALVADOR DO SUL', '4316501', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21663, 'SAO JOSE DO HORTENCIO', '4318481', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21664, 'SAO JOSE DO SUL', '4318614', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21665, 'SAO PEDRO DA SERRA', '4319356', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21666, 'SAO SEBASTIAO DO CAI', '4319505', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21667, 'SAO VENDELINO', '4319752', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21668, 'TUPANDI', '4322251', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21669, 'VALE REAL', '4322541', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21670, 'CANELA', '4304408', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21671, 'DOIS IRMAOS', '4306403', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21672, 'GRAMADO', '4309100', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21673, 'IGREJINHA', '4310108', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21674, 'IVOTI', '4310801', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21675, 'LINDOLFO COLLOR', '4311627', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21676, 'MORRO REUTER', '4312476', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21677, 'NOVA PETROPOLIS', '4313201', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21678, 'PICADA CAFE', '4314423', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21679, 'PRESIDENTE LUCENA', '4315149', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21680, 'RIOZINHO', '4315750', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21681, 'ROLANTE', '4316006', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21682, 'SANTA MARIA DO HERVAL', '4316956', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21683, 'TAQUARA', '4321204', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21684, 'TRES COROAS', '4321709', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21685, 'ARROIO DOS RATOS', '4301107', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21686, 'BARAO DO TRIUNFO', '4301750', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21687, 'BUTIA', '4302709', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21688, 'CHARQUEADAS', '4305355', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21689, 'GENERAL CAMARA', '4308805', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21690, 'MINAS DO LEAO', '4312252', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21691, 'SAO JERONIMO', '4318408', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21692, 'TRIUNFO', '4322004', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21693, 'VALE VERDE', '4322525', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21694, 'ALVORADA', '4300604', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21695, 'ARARICA', '4300877', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21696, 'CACHOEIRINHA', '4303103', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21697, 'CAMPO BOM', '4303905', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21698, 'CANOAS', '4304606', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21699, 'ELDORADO DO SUL', '4306767', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21700, 'ESTANCIA VELHA', '4307609', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21701, 'ESTEIO', '4307708', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21702, 'GLORINHA', '4309050', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21703, 'GRAVATAI', '4309209', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21704, 'GUAIBA', '4309308', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21705, 'MARIANA PIMENTEL', '4311981', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21706, 'NOVA HARTZ', '4313060', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21707, 'NOVA SANTA RITA', '4313375', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21708, 'NOVO HAMBURGO', '4313409', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21709, 'PAROBE', '4314050', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21710, 'PORTO ALEGRE', '4314902', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21711, 'SAO LEOPOLDO', '4318705', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21712, 'SAPIRANGA', '4319901', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21713, 'SAPUCAIA DO SUL', '4320008', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21714, 'SERTAO SANTANA', '4320552', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21715, 'VIAMAO', '4323002', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21716, 'ARROIO DO SAL', '4301057', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21717, 'BALNEARIO PINHAL', '4301636', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21718, 'CAPAO DA CANOA', '4304630', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21719, 'CAPIVARI DO SUL', '4304671', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21720, 'CARAA', '4304713', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21721, 'CIDREIRA', '4305454', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21722, 'DOM PEDRO DE ALCANTARA', '4306551', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21723, 'IMBE', '4310330', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21724, 'ITATI', '4310652', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21725, 'MAMPITUBA', '4311734', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21726, 'MAQUINE', '4311775', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21727, 'MORRINHOS DO SUL', '4312443', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21728, 'MOSTARDAS', '4312500', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21729, 'OSORIO', '4313508', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21730, 'PALMARES DO SUL', '4313656', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21731, 'SANTO ANTONIO DA PATRULHA', '4317608', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21732, 'TAVARES', '4321352', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21733, 'TERRA DE AREIA', '4321436', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21734, 'TORRES', '4321501', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21735, 'TRAMANDAI', '4321600', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21736, 'TRES CACHOEIRAS', '4321667', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21737, 'TRES FORQUILHAS', '4321832', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21738, 'XANGRI-LA', '4323804', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21739, 'ARAMBARE', '4300851', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21740, 'BARRA DO RIBEIRO', '4301909', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21741, 'CAMAQUA', '4303509', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21742, 'CERRO GRANDE DO SUL', '4305173', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21743, 'CHUVISCA', '4305447', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21744, 'DOM FELICIANO', '4306502', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21745, 'SENTINELA DO SUL', '4320354', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21746, 'TAPES', '4321105', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21747, 'ALEGRETE', '4300406', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21748, 'BARRA DO QUARAI', '4301875', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21749, 'GARRUCHOS', '4308656', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21750, 'ITAQUI', '4310603', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21751, 'MACAMBARA', '4311718', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21752, 'MANOEL VIANA', '4311759', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21753, 'QUARAI', '4315305', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21754, 'SAO BORJA', '4318002', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21755, 'SAO FRANCISCO DE ASSIS', '4318101', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21756, 'URUGUAIANA', '4322400', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21757, 'ROSARIO DO SUL', '4316402', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21758, 'SANTA MARGARIDA DO SUL', '4316972', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21759, 'SANTANA DO LIVRAMENTO', '4317103', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21760, 'SAO GABRIEL', '4318309', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21761, 'ACEGUA', '4300034', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21762, 'BAGE', '4301602', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21763, 'DOM PEDRITO', '4306601', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21764, 'HULHA NEGRA', '4309654', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21765, 'LAVRAS DO SUL', '4311502', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21766, 'AMARAL FERRADOR', '4300638', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21767, 'CACAPAVA DO SUL', '4302808', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21768, 'CANDIOTA', '4304358', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21769, 'ENCRUZILHADA DO SUL', '4306908', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21770, 'PEDRAS ALTAS', '4314175', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21771, 'PINHEIRO MACHADO', '4314506', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21772, 'PIRATINI', '4314605', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21773, 'SANTANA DA BOA VISTA', '4317004', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21774, 'ARROIO DO PADRE', '4301073', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21775, 'CANGUCU', '4304507', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21776, 'CAPAO DO LEAO', '4304663', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21777, 'CERRITO', '4305124', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21778, 'CRISTAL', '4306056', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21779, 'MORRO REDONDO', '4312450', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21780, 'PEDRO OSORIO', '4314209', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21781, 'PELOTAS', '4314407', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21782, 'SAO LOURENCO DO SUL', '4318804', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21783, 'TURUCU', '4322327', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21784, 'ARROIO GRANDE', '4301305', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21785, 'HERVAL', '4307104', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21786, 'JAGUARAO', '4311007', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21787, 'CHUI', '4305439', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21788, 'RIO GRANDE', '4315602', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21789, 'SANTA VITORIA DO PALMAR', '4317301', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21790, 'SAO JOSE DO NORTE', '4318507', 43);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21791, 'CORUMBA', '5003207', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21792, 'LADARIO', '5005202', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21793, 'PORTO MURTINHO', '5006903', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21794, 'ANASTACIO', '5000708', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21795, 'AQUIDAUANA', '5001102', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21796, 'DOIS IRMAOS DO BURITI', '5003488', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21797, 'MIRANDA', '5005608', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21798, 'ALCINOPOLIS', '5000252', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21799, 'CAMAPUA', '5002605', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21800, 'COXIM', '5003306', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21801, 'FIGUEIRAO', '5003900', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21802, 'PEDRO GOMES', '5006408', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21803, 'RIO VERDE DE MATO GROSSO', '5007406', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21804, 'SAO GABRIEL DO OESTE', '5007695', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21805, 'SONORA', '5007935', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21806, 'BANDEIRANTES', '5001508', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21807, 'CAMPO GRANDE', '5002704', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21808, 'CORGUINHO', '5003108', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21809, 'JARAGUARI', '5004908', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21810, 'RIO NEGRO', '5007307', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21811, 'ROCHEDO', '5007505', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21812, 'SIDROLANDIA', '5007901', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21813, 'TERENOS', '5008008', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21814, 'CASSILANDIA', '5002902', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21815, 'CHAPADAO DO SUL', '5002951', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21816, 'COSTA RICA', '5003256', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21817, 'APARECIDA DO TABOADO', '5001003', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21818, 'INOCENCIA', '5004403', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21819, 'PARANAIBA', '5006309', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21820, 'SELVIRIA', '5007802', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21821, 'AGUA CLARA', '5000203', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21822, 'BRASILANDIA', '5002308', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21823, 'RIBAS DO RIO PARDO', '5007109', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21824, 'SANTA RITA DO PARDO', '5007554', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21825, 'TRES LAGOAS', '5008305', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21826, 'ANAURILANDIA', '5000807', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21827, 'BATAGUASSU', '5001904', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21828, 'BATAYPORA', '5002001', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21829, 'NOVA ANDRADINA', '5006200', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21830, 'TAQUARUSSU', '5007976', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21831, 'BELA VISTA', '5002100', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21832, 'BODOQUENA', '5002159', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21833, 'BONITO', '5002209', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21834, 'CARACOL', '5002803', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21835, 'GUIA LOPES DA LAGUNA', '5004106', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21836, 'JARDIM', '5005004', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21837, 'NIOAQUE', '5005806', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21838, 'AMAMBAI', '5000609', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21839, 'ANTONIO JOAO', '5000906', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21840, 'ARAL MOREIRA', '5001243', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21841, 'CAARAPO', '5002407', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21842, 'DOURADINA', '5003504', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21843, 'DOURADOS', '5003702', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21844, 'FATIMA DO SUL', '5003801', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21845, 'ITAPORA', '5004502', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21846, 'JUTI', '5005152', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21847, 'LAGUNA CARAPA', '5005251', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21848, 'MARACAJU', '5005400', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21849, 'NOVA ALVORADA DO SUL', '5006002', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21850, 'PONTA PORA', '5006606', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21851, 'RIO BRILHANTE', '5007208', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21852, 'VICENTINA', '5008404', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21853, 'ANGELICA', '5000856', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21854, 'CORONEL SAPUCAIA', '5003157', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21855, 'DEODAPOLIS', '5003454', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21856, 'ELDORADO', '5003751', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21857, 'GLORIA DE DOURADOS', '5004007', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21858, 'IGUATEMI', '5004304', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21859, 'ITAQUIRAI', '5004601', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21860, 'IVINHEMA', '5004700', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21861, 'JAPORA', '5004809', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21862, 'JATEI', '5005103', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21863, 'MUNDO NOVO', '5005681', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21864, 'NAVIRAI', '5005707', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21865, 'NOVO HORIZONTE DO SUL', '5006259', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21866, 'PARANHOS', '5006358', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21867, 'SETE QUEDAS', '5007703', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21868, 'TACURU', '5007950', 50);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21869, 'ARIPUANA', '5101407', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21870, 'BRASNORTE', '5101902', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21871, 'CASTANHEIRA', '5102850', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21872, 'COLNIZA', '5103254', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21873, 'COTRIGUACU', '5103379', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21874, 'JUINA', '5105150', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21875, 'JURUENA', '5105176', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21876, 'RONDOLANDIA', '5107578', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21877, 'ALTA FLORESTA', '5100250', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21878, 'APIACAS', '5100805', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21879, 'CARLINDA', '5102793', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21880, 'NOVA BANDEIRANTES', '5106158', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21881, 'PARANAITA', '5106299', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21882, 'NOVA MONTE VERDE', '5108956', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21883, 'COLIDER', '5103205', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21884, 'GUARANTA DO NORTE', '5104104', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21885, 'MATUPA', '5105606', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21886, 'NOVA CANAA DO NORTE', '5106216', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21887, 'NOVO MUNDO', '5106265', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21888, 'PEIXOTO DE AZEVEDO', '5106422', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21889, 'TERRA NOVA DO NORTE', '5108055', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21890, 'NOVA GUARITA', '5108808', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21891, 'CAMPO NOVO DO PARECIS', '5102637', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21892, 'CAMPOS DE JULIO', '5102686', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21893, 'COMODORO', '5103304', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21894, 'DIAMANTINO', '5103502', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21895, 'SAPEZAL', '5107875', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21896, 'JUARA', '5105101', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21897, 'NOVO HORIZONTE DO NORTE', '5106273', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21898, 'PORTO DOS GAUCHOS', '5106802', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21899, 'SAO JOSE DO RIO CLARO', '5107305', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21900, 'TABAPORA', '5107941', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21901, 'NOVA MARINGA', '5108907', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21902, 'IPIRANGA DO NORTE', '5104526', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21903, 'ITANHANGA', '5104542', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21904, 'LUCAS DO RIO VERDE', '5105259', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21905, 'NOBRES', '5105903', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21906, 'NOVA MUTUM', '5106224', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21907, 'NOVA UBIRATA', '5106240', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21908, 'SANTA RITA DO TRIVELATO', '5107768', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21909, 'SORRISO', '5107925', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21910, 'TAPURAH', '5108006', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21911, 'CLAUDIA', '5103056', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21912, 'FELIZ NATAL', '5103700', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21913, 'ITAUBA', '5104559', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21914, 'MARCELANDIA', '5105580', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21915, 'NOVA SANTA HELENA', '5106190', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21916, 'SANTA CARMEM', '5107248', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21917, 'SINOP', '5107909', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21918, 'UNIAO DO SUL', '5108303', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21919, 'VERA', '5108501', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21920, 'GAUCHA DO NORTE', '5103858', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21921, 'NOVA BRASILANDIA', '5106208', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21922, 'PARANATINGA', '5106307', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21923, 'PLANALTO DA SERRA', '5106455', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21924, 'ALTO BOA VISTA', '5100359', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21925, 'BOM JESUS DO ARAGUAIA', '5101852', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21926, 'CANABRAVA DO NORTE', '5102694', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21927, 'CONFRESA', '5103353', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21928, 'LUCIARA', '5105309', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21929, 'NOVO SANTO ANTONIO', '5106315', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21930, 'PORTO ALEGRE DO NORTE', '5106778', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21931, 'RIBEIRAO CASCALHEIRA', '5107180', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21932, 'SAO JOSE DO XINGU', '5107354', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21933, 'SANTA CRUZ DO XINGU', '5107743', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21934, 'SANTA TEREZINHA', '5107776', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21935, 'SAO FELIX DO ARAGUAIA', '5107859', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21936, 'SERRA NOVA DOURADA', '5107883', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21937, 'VILA RICA', '5108600', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21938, 'AGUA BOA', '5100201', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21939, 'CAMPINAPOLIS', '5102603', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21940, 'CANARANA', '5102702', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21941, 'NOVA NAZARE', '5106174', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21942, 'NOVA XAVANTINA', '5106257', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21943, 'NOVO SAO JOAQUIM', '5106281', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21944, 'QUERENCIA', '5107065', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21945, 'SANTO ANTONIO DO LESTE', '5107792', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21946, 'ARAGUAIANA', '5101001', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21947, 'BARRA DO GARCAS', '5101803', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21948, 'COCALINHO', '5103106', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21949, 'CONQUISTA D OESTE', '5103361', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21950, 'VILA BELA DA SANTISSIMA TRINDADE', '5105507', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21951, 'NOVA LACERDA', '5106182', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21952, 'PONTES E LACERDA', '5106752', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21953, 'VALE DE SAO DOMINGOS', '5108352', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21954, 'BARRA DO BUGRES', '5101704', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21955, 'DENISE', '5103452', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21956, 'NOVA OLIMPIA', '5106232', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21957, 'PORTO ESTRELA', '5106851', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21958, 'TANGARA DA SERRA', '5107958', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21959, 'ARAPUTANGA', '5101258', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21960, 'FIGUEIROPOLIS D OESTE', '5103809', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21961, 'GLORIA D OESTE', '5103957', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21962, 'INDIAVAI', '5104500', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21963, 'JAURU', '5105002', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21964, 'LAMBARI D OESTE', '5105234', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21965, 'MIRASSOL D OESTE', '5105622', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21966, 'PORTO ESPERIDIAO', '5106828', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21967, 'SAO JOSE DOS QUATRO MARCOS', '5107107', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21968, 'RESERVA DO CABACAL', '5107156', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21969, 'RIO BRANCO', '5107206', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21970, 'SALTO DO CEU', '5107750', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21971, 'ALTO PARAGUAI', '5100508', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21972, 'ARENAPOLIS', '5101308', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21973, 'NORTELANDIA', '5106000', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21974, 'SANTO AFONSO', '5107263', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21975, 'NOVA MARILANDIA', '5108857', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21976, 'ACORIZAL', '5100102', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21977, 'JANGADA', '5104906', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21978, 'ROSARIO OESTE', '5107701', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21979, 'CHAPADA DOS GUIMARAES', '5103007', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21980, 'CUIABA', '5103403', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21981, 'NOSSA SENHORA DO LIVRAMENTO', '5106109', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21982, 'SANTO ANTONIO DO LEVERGER', '5107800', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21983, 'VARZEA GRANDE', '5108402', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21984, 'BARAO DE MELGACO', '5101605', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21985, 'CACERES', '5102504', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21986, 'CURVELANDIA', '5103437', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21987, 'POCONE', '5106505', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21988, 'CAMPO VERDE', '5102678', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21989, 'PRIMAVERA DO LESTE', '5107040', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21990, 'ARAGUAINHA', '5101209', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21991, 'GENERAL CARNEIRO', '5103908', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21992, 'GUIRATINGA', '5104203', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21993, 'PONTAL DO ARAGUAIA', '5106653', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21994, 'PONTE BRANCA', '5106703', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21995, 'POXOREO', '5107008', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21996, 'RIBEIRAOZINHO', '5107198', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21997, 'TESOURO', '5108105', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21998, 'TORIXOREU', '5108204', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (21999, 'DOM AQUINO', '5103601', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22000, 'ITIQUIRA', '5104609', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22001, 'JACIARA', '5104807', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22002, 'JUSCIMEIRA', '5105200', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22003, 'PEDRA PRETA', '5106372', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22004, 'SAO JOSE DO POVO', '5107297', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22005, 'SAO PEDRO DA CIPA', '5107404', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22006, 'RONDONOPOLIS', '5107602', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22007, 'ALTO ARAGUAIA', '5100300', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22008, 'ALTO GARCAS', '5100409', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22009, 'ALTO TAQUARI', '5100607', 51);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22010, 'CRIXAS', '5206404', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22011, 'MOZARLANDIA', '5214002', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22012, 'MUNDO NOVO', '5214051', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22013, 'NOVA CRIXAS', '5214838', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22014, 'NOVO PLANALTO', '5215256', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22015, 'SAO MIGUEL DO ARAGUAIA', '5220207', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22016, 'UIRAPURU', '5221577', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22017, 'ARAGUAPAZ', '5202155', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22018, 'ARUANA', '5202502', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22019, 'BRITANIA', '5203807', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22020, 'FAINA', '5207535', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22021, 'GOIAS', '5208905', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22022, 'ITAPIRAPUA', '5211008', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22023, 'JUSSARA', '5212204', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22024, 'MATRINCHA', '5212956', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22025, 'SANTA FE DE GOIAS', '5219258', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22026, 'ARAGARCAS', '5201702', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22027, 'ARENOPOLIS', '5202353', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22028, 'BALIZA', '5203104', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22029, 'BOM JARDIM DE GOIAS', '5203401', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22030, 'DIORAMA', '5207105', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22031, 'MONTES CLAROS DE GOIAS', '5213707', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22032, 'PIRANHAS', '5217203', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22033, 'ALTO HORIZONTE', '5200555', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22034, 'AMARALINA', '5200829', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22035, 'BONOPOLIS', '5203575', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22036, 'CAMPINACU', '5204656', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22037, 'CAMPINORTE', '5204706', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22038, 'CAMPOS VERDES', '5204953', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22039, 'ESTRELA DO NORTE', '5207501', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22040, 'FORMOSO', '5208103', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22041, 'MARA ROSA', '5212808', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22042, 'MINACU', '5213087', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22043, 'MONTIVIDIU DO NORTE', '5213772', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22044, 'MUTUNOPOLIS', '5214101', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22045, 'NIQUELANDIA', '5214606', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22046, 'NOVA IGUACU DE GOIAS', '5214879', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22047, 'PORANGATU', '5218003', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22048, 'SANTA TEREZA DE GOIAS', '5219605', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22049, 'SANTA TEREZINHA DE GOIAS', '5219704', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22050, 'TROMBAS', '5221452', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22051, 'URUACU', '5221601', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22052, 'ALTO PARAISO DE GOIAS', '5200605', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22053, 'CAMPOS BELOS', '5204904', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22054, 'CAVALCANTE', '5205307', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22055, 'COLINAS DO SUL', '5205521', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22056, 'MONTE ALEGRE DE GOIAS', '5213509', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22057, 'NOVA ROMA', '5214903', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22058, 'SAO JOAO D ALIANCA', '5220009', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22059, 'TERESINA DE GOIAS', '5221080', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22060, 'BARRO ALTO', '5203203', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22061, 'CARMO DO RIO VERDE', '5205000', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22062, 'CERES', '5205406', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22063, 'GOIANESIA', '5208608', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22064, 'GUARAITA', '5209291', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22065, 'GUARINOS', '5209457', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22066, 'HIDROLINA', '5209804', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22067, 'IPIRANGA DE GOIAS', '5210158', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22068, 'ITAPACI', '5210901', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22069, 'ITAPURANGA', '5211206', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22070, 'MORRO AGUDO DE GOIAS', '5213855', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22071, 'NOVA AMERICA', '5214705', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22072, 'NOVA GLORIA', '5214861', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22073, 'PILAR DE GOIAS', '5216908', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22074, 'RIALMA', '5218607', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22075, 'RIANAPOLIS', '5218706', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22076, 'RUBIATABA', '5218904', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22077, 'SANTA ISABEL', '5219357', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22078, 'SANTA RITA DO NOVO DESTINO', '5219456', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22079, 'SAO LUIZ DO NORTE', '5220157', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22080, 'SAO PATRICIO', '5220280', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22081, 'URUANA', '5221700', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22082, 'ANAPOLIS', '5201108', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22083, 'ARACU', '5201603', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22084, 'BRAZABRANTES', '5203609', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22085, 'CAMPO LIMPO DE GOIAS', '5204854', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22086, 'CATURAI', '5205208', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22087, 'DAMOLANDIA', '5206800', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22088, 'HEITORAI', '5209606', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22089, 'INHUMAS', '5210000', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22090, 'ITABERAI', '5210406', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22091, 'ITAGUARI', '5210562', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22092, 'ITAGUARU', '5210604', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22093, 'ITAUCU', '5211404', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22094, 'JARAGUA', '5211800', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22095, 'JESUPOLIS', '5212055', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22096, 'NOVA VENEZA', '5215009', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22097, 'OURO VERDE DE GOIAS', '5215405', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22098, 'PETROLINA DE GOIAS', '5216809', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22099, 'SANTA ROSA DE GOIAS', '5219506', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22100, 'SAO FRANCISCO DE GOIAS', '5219902', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22101, 'TAQUARAL DE GOIAS', '5221007', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22102, 'AMORINOPOLIS', '5200902', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22103, 'CACHOEIRA DE GOIAS', '5204201', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22104, 'CORREGO DO OURO', '5205703', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22105, 'FAZENDA NOVA', '5207600', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22106, 'IPORA', '5210208', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22107, 'ISRAELANDIA', '5210307', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22108, 'IVOLANDIA', '5211602', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22109, 'JAUPACI', '5212006', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22110, 'MOIPORA', '5213400', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22111, 'NOVO BRASIL', '5215207', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22112, 'ADELANDIA', '5200159', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22113, 'AMERICANO DO BRASIL', '5200852', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22114, 'ANICUNS', '5201306', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22115, 'AURILANDIA', '5202601', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22116, 'AVELINOPOLIS', '5202809', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22117, 'BURITI DE GOIAS', '5203939', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22118, 'FIRMINOPOLIS', '5207808', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22119, 'MOSSAMEDES', '5213905', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22120, 'NAZARIO', '5214408', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22121, 'SANCLERLANDIA', '5219001', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22122, 'SANTA BARBARA DE GOIAS', '5219100', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22123, 'SAO LUIS DE MONTES BELOS', '5220108', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22124, 'TURVANIA', '5221502', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22127, 'ARAGOIANIA', '5201801', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22128, 'BELA VISTA DE GOIAS', '5203302', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22129, 'BONFINOPOLIS', '5203559', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22130, 'CALDAZINHA', '5204557', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22131, 'GOIANAPOLIS', '5208400', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22132, 'GOIANIA', '5208707', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22133, 'GOIANIRA', '5208806', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22134, 'GUAPO', '5209200', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22135, 'HIDROLANDIA', '5209705', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22136, 'LEOPOLDO DE BULHOES', '5212303', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22137, 'NEROPOLIS', '5214507', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22138, 'SANTO ANTONIO DE GOIAS', '5219738', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22139, 'SENADOR CANEDO', '5220454', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22140, 'TEREZOPOLIS DE GOIAS', '5221197', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22141, 'TRINDADE', '5221403', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22142, 'ALVORADA DO NORTE', '5200803', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22143, 'BURITINOPOLIS', '5203962', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22144, 'DAMIANOPOLIS', '5206701', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22145, 'FLORES DE GOIAS', '5207907', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22146, 'DIVINOPOLIS DE GOIAS', '5208301', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22147, 'GUARANI DE GOIAS', '5209408', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22148, 'IACIARA', '5209903', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22149, 'MAMBAI', '5212709', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22150, 'POSSE', '5218300', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22151, 'SAO DOMINGOS', '5219803', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22152, 'SIMOLANDIA', '5220686', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22153, 'SITIO D ABADIA', '5220702', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22154, 'ABADIANIA', '5200100', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22155, 'AGUA FRIA DE GOIAS', '5200175', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22156, 'AGUAS LINDAS DE GOIAS', '5200258', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22157, 'ALEXANIA', '5200308', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22158, 'CABECEIRAS', '5204003', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22159, 'CIDADE OCIDENTAL', '5205497', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22160, 'COCALZINHO DE GOIAS', '5205513', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22161, 'CORUMBA DE GOIAS', '5205802', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22162, 'CRISTALINA', '5206206', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22163, 'FORMOSA', '5208004', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22164, 'LUZIANIA', '5212501', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22165, 'MIMOSO DE GOIAS', '5213053', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22166, 'NOVO GAMA', '5215231', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22167, 'PADRE BERNARDO', '5215603', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22168, 'PIRENOPOLIS', '5217302', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22169, 'PLANALTINA', '5217609', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22170, 'SANTO ANTONIO DO DESCOBERTO', '5219753', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22171, 'VALPARAISO DE GOIAS', '5221858', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22172, 'VILA BOA', '5222203', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22173, 'VILA PROPICIO', '5222302', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22174, 'APARECIDA DO RIO DOCE', '5201454', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22175, 'APORE', '5201504', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22176, 'CAIAPONIA', '5204409', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22177, 'CASTELANDIA', '5205059', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22178, 'CHAPADAO DO CEU', '5205471', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22179, 'DOVERLANDIA', '5207253', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22180, 'JATAI', '5211909', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22181, 'MAURILANDIA', '5213004', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22182, 'MINEIROS', '5213103', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22183, 'MONTIVIDIU', '5213756', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22184, 'PALESTINA DE GOIAS', '5215652', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22185, 'PEROLANDIA', '5216452', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22186, 'PORTELANDIA', '5218102', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22187, 'RIO VERDE', '5218805', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22188, 'SANTA HELENA DE GOIAS', '5219308', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22189, 'SANTA RITA DO ARAGUAIA', '5219407', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22190, 'SANTO ANTONIO DA BARRA', '5219712', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22191, 'SERRANOPOLIS', '5220504', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22192, 'ACREUNA', '5200134', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22193, 'CAMPESTRE DE GOIAS', '5204607', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22194, 'CEZARINA', '5205455', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22195, 'EDEALINA', '5207352', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22196, 'EDEIA', '5207402', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22197, 'INDIARA', '5209952', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22198, 'JANDAIA', '5211701', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22199, 'PALMEIRAS DE GOIAS', '5215702', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22200, 'PALMINOPOLIS', '5215900', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22201, 'PARAUNA', '5216403', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22202, 'SAO JOAO DA PARAUNA', '5220058', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22203, 'TURVELANDIA', '5221551', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22204, 'VARJAO', '5221908', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22205, 'AGUA LIMPA', '5200209', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22206, 'ALOANDIA', '5200506', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22207, 'BOM JESUS DE GOIAS', '5203500', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22208, 'BURITI ALEGRE', '5203906', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22209, 'CACHOEIRA DOURADA', '5204250', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22210, 'CALDAS NOVAS', '5204508', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22211, 'CROMINIA', '5206503', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22212, 'GOIATUBA', '5209101', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22213, 'INACIOLANDIA', '5209937', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22214, 'ITUMBIARA', '5211503', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22215, 'JOVIANIA', '5212105', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22216, 'MAIRIPOTABA', '5212600', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22217, 'MARZAGAO', '5212907', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22218, 'MORRINHOS', '5213806', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22219, 'PANAMA', '5216007', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22220, 'PIRACANJUBA', '5217104', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22221, 'PONTALINA', '5217708', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22222, 'PORTEIRAO', '5218052', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22223, 'PROFESSOR JAMIL', '5218391', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22224, 'RIO QUENTE', '5218789', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22225, 'VICENTINOPOLIS', '5222054', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22226, 'CRISTIANOPOLIS', '5206305', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22227, 'GAMELEIRA DE GOIAS', '5208152', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22228, 'ORIZONA', '5215306', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22229, 'PALMELO', '5215801', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22230, 'PIRES DO RIO', '5217401', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22231, 'SANTA CRUZ DE GOIAS', '5219209', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22232, 'SAO MIGUEL DO PASSA QUATRO', '5220264', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22233, 'SILVANIA', '5220603', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22234, 'URUTAI', '5221809', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22235, 'VIANOPOLIS', '5222005', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22236, 'ANHANGUERA', '5201207', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22237, 'CAMPO ALEGRE DE GOIAS', '5204805', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22238, 'CATALAO', '5205109', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22239, 'CORUMBAIBA', '5205901', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22240, 'CUMARI', '5206602', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22241, 'DAVINOPOLIS', '5206909', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22242, 'GOIANDIRA', '5208509', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22243, 'IPAMERI', '5210109', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22244, 'NOVA AURORA', '5214804', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22245, 'OUVIDOR', '5215504', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22246, 'TRES RANCHOS', '5221304', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22247, 'CACHOEIRA ALTA', '5204102', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22248, 'CACU', '5204300', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22249, 'GOUVELANDIA', '5209150', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22250, 'ITAJA', '5210802', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22251, 'ITARUMA', '5211305', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22252, 'LAGOA SANTA', '5212253', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22253, 'PARANAIGUARA', '5216304', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22254, 'QUIRINOPOLIS', '5218508', 52);
            INSERT INTO `cities` (`id`, `city`, `code_ibge`, `state_id`) VALUES
                (22255, 'SAO SIMAO', '5220405', 52);
            /*!40000 ALTER TABLE `cities` ENABLE KEYS */;

            /*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
            /*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
            /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
            ";
        DB::unprepared(DB::raw($query));
    }
}
