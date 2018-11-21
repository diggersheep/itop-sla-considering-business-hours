<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
//
// Class: CoverageWindow
//

Dict::Add('ES CR', 'Spanish', 'Espa�ol, Castellano', array(
	'Menu:CoverageWindows' => 'Ventana de Cobertura',
	'Menu:CoverageWindows+' => 'Todas las Ventanas de Cobertura',
	'Class:CoverageWindow' => 'Ventana de Cobertura',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:name' => 'Nombre',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Descripci�n',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Nombre Com�n',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
	'Class:CoverageWindow/Attribute:interval_list' => 'Horas abiertas',
	'WorkingHoursInterval:StartTime' => 'Tiempo Inicio:',
	'WorkingHoursInterval:EndTime' => 'Tiempo Final:',
	'WorkingHoursInterval:WholeDay' => 'Todo el D�a:',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Remover Intervalo',
	'WorkingHoursInterval:DlgTitle' => 'Edici�n de intervalo de horas abiertas',
	'Class:CoverageWindowInterval' => 'Intervalo de Horas Abiertas',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Ventana de Cobertura',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'D�as de la Semana',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Domingo',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Lunes',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Martes',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Mi�rcoles',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Jueves',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Viernes',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'S�bado',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Tiempo Inicio',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Tiempo Final',
	
));

Dict::Add('ES CR', 'Spanish', 'Espa�ol, Castellano', array(
	// Dictionary entries go here
	'Menu:Holidays' => 'Festivos',
	'Menu:Holidays+' => 'Todos los Festivos',
	'Class:Holiday' => 'Festivo',
	'Class:Holiday+' => 'D�a no laborable',
	'Class:Holiday/Attribute:name' => 'Nombre',
	'Class:Holiday/Attribute:date' => 'Fecha',
	'Class:Holiday/Attribute:calendar_id' => 'Calendario',
	'Class:Holiday/Attribute:calendar_id+' => 'El calendario al cual el d�a festivo est� relacionado (si hay alguno)',
	'Coverage:Description' => 'Descripci�n',	
	'Coverage:StartTime' => 'Tiempo Inicio',	
	'Coverage:EndTime' => 'Tiempo Final',

));


Dict::Add('ES CR', 'Spanish', 'Espa�ol, Castellano', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => 'Calendario de Festivos',
	'Menu:HolidayCalendars+' => 'Todos los Calendarios de Festivos',
	'Class:HolidayCalendar' => 'Calendario de Festivos',
	'Class:HolidayCalendar+' => 'Un grupo de festividades a los que otros objetos pueden estar relacionados',
	'Class:HolidayCalendar/Attribute:name' => 'Nombre',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Festivos',
));
