# monthToPeriods

**Продолжительность тура в днях и ночах**
На вход подается известное кол-во дней или ночей

@param days {int} - продолжительность в днях или

@param nights {int} - продолжительность в ночах

@param daysWords {string} - варианты написания дней для количества 1, 2 и 5

@param nightsWords {string} - варианты написания ночей для количества 1, 2 и 5

@param separator {string} - разделитель между днями и ночами

**Требует наличия снипета declension!**


## Примеры

	[[dayNights? &days=`5` &daysWords=`день,дня,дней` &nightsWords=`ночь,ночи,ночей` &separator=` / `]]
*5 дней / 4 ночи*

	[[dayNights? &days=`1` &daysWords=`день,дня,дней` &nightsWords=`ночь,ночи,ночей` &separator=` / `]]
*1 день*

	[[dayNights? &nights=`1` &daysWords=`день,дня,дней` &nightsWords=`ночь,ночи,ночей` &separator=` / `]]
*2 дня / 1 ночь*

