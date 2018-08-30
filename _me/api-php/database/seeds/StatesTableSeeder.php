<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "DELETE FROM `states`;
INSERT INTO `states` (`id`, `initials`, `state`) VALUES(11, 'RO', 'Rondônia');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(12, 'AC', 'Acre');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(13, 'AM', 'Amazonas');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(14, 'RR', 'Roraima');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(15, 'PA', 'Pará');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(16, 'AP', 'Amapá');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(17, 'TO', 'Tocantins');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(21, 'MA', 'Maranhão');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(22, 'PI', 'Piauí');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(23, 'CE', 'Ceará');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(24, 'RN', 'Rio Grande do Norte');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(25, 'PB', 'Paraíba');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(26, 'PE', 'Pernambuco');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(27, 'AL', 'Alagoas');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(28, 'SE', 'Sergipe');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(29, 'BA', 'Bahia');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(31, 'MG', 'Minas Gerais');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(32, 'ES', 'Espírito Santo');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(33, 'RJ', 'Rio de Janeiro');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(35, 'SP', 'São Paulo');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(41, 'PR', 'Paraná');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(42, 'SC', 'Santa Catarina');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(43, 'RS', 'Rio Grande do Sul');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(50, 'MS', 'Mato Grosso do Sul');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(51, 'MT', 'Mato Grosso');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(52, 'GO', 'Goiás');
INSERT INTO `states` (`id`, `initials`, `state`) VALUES
	(53, 'DF', 'Distrito Federal');";

      DB::unprepared(DB::raw($query));
    }
}
