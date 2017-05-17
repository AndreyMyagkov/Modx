# getImgFromPSSGallery

**Путь к произвольной фото из произвольной галереи  PSSGallery**

@param id {int} - id страницы с галереей

@param index {int} - порядковый номер фото (по умолчпнию 1)

@param type {string} - возращать путь к big или thumb фото (по умолчанию big)

@param noimage {string} - путь noimage картинке, если фото из галереи не найдено и нужена не стандартная картинка noimage

@return string - путь к картинке

## Пример
	[[getImgFromPSSGallery? &id=`5`]]
