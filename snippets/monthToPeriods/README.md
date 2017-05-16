# monthToPeriods

**Преобразует список порядковых номеров месяцев в периоды в тектовом виде**

@param $month {string} - список месяцев
@param $shortly {boolean} - объединяет периоды, попадающие на новый год
@return string

## Примеры
	[[monthToPeriods? &month=`1,2,3,7,11,12`]]

январь — март, июль, ноябрь — декабрь

	[[monthToPeriods? &month=`1,2,3,7,11,12` &shortly=`1`]]

ноябрь — март, июль
