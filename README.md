<!--# carpart-mvc-2022
Se organiza implementando el Patrón de Diseño MVC. Base de datos alojada en el host de Rialway. Código de la aplicación alojado en GitHub. Desde el servicio de Heroku se hace la conexión a GitHub y a Rialway para su despliegue en producción. Para realizar pruebas se puede ingresar con las credenciales: usuario: admin y contraseña: admin para conocer el rol del administrador, o usuario: user y contraseña: user para conocer el rol del vendedor. 

![image](https://user-images.githubusercontent.com/53632260/202060571-cff8ddbe-0c31-4494-9e17-408462adfb37.png)-->


PLAN MAESTRO DE PRUEBAS

Proyecto: CARPART – Sistema de Inventario

Versión: 1.1

SENA – Servicio Nacional de Aprendizaje

Programa de Formación: Técnico Programación de Software

Ficha: 2500138 – G2

Bogotá – 2022





Historia de revisiones

Versión Autor(es)

Descripción

Fecha

1.1

1.1

Jonathan Meza

Daniel Aguilar

Creación del Documento

Identificación de un nuevo riesgo

Dic - 2022

Dic - 2022





INDICE

[1](#br3)[ ](#br3)[Introducción](#br3)

[1.1](#br4)[ ](#br4)[Objetivo](#br4)

[1.2](#br4)[ ](#br4)[Referencia](#br4)

[1.3](#br4)[ ](#br4)[Alcance](#br4)

[2](#br4)[ ](#br4)[Contexto](#br4)[ ](#br4)[de](#br4)[ ](#br4)[las](#br4)[ ](#br4)[Pruebas](#br4)

[2.1](#br4)[ ](#br4)[Proyecto](#br4)

[2.2](#br5)[ ](#br5)[Objetivos](#br5)[ ](#br5)[de](#br5)[ ](#br5)[las](#br5)[ ](#br5)[Pruebas](#br5)

[2.3](#br5)[ ](#br5)[Estrategia](#br5)[ ](#br5)[de](#br5)[ ](#br5)[Prueba](#br5)

[2.4](#br6)[ ](#br6)[Diseño](#br6)[ ](#br6)[de](#br6)[ ](#br6)[casos](#br6)[ ](#br6)[de](#br6)[ ](#br6)[prueba](#br6)

[2.5](#br6)[ ](#br6)[Técnica](#br6)[ ](#br6)[de](#br6)[ ](#br6)[Caja](#br6)[ ](#br6)[Negra](#br6)

[2.5.1](#br6)[ ](#br6)[Nivel](#br6)[ ](#br6)[de](#br6)[ ](#br6)[Pruebas](#br6)[ ](#br6)[por](#br6)[ ](#br6)[Componentes](#br6)[ ](#br6)[o](#br6)[ ](#br6)[Pruebas](#br6)[ ](#br6)[Unitarias](#br6)

[2.5.2](#br13)[ ](#br13)[Nivel](#br13)[ ](#br13)[de](#br13)[ ](#br13)[Pruebas](#br13)[ ](#br13)[de](#br13)[ ](#br13)[Integración](#br13)

[2.5.3](#br14)[ ](#br14)[Nivel](#br14)[ ](#br14)[de](#br14)[ ](#br14)[Prueba](#br14)[ ](#br14)[de](#br14)[ ](#br14)[Sistema](#br14)

[2.5.3.1](#br14)[ ](#br14)[Prueba](#br14)[ ](#br14)[de](#br14)[ ](#br14)[Seguridad](#br14)

[2.5.3.1.1](#br15)[ ](#br15)[Técnica](#br15)[ ](#br15)[de](#br15)[ ](#br15)[Caja](#br15)[ ](#br15)[Blanca](#br15)

[3](#br16)[ ](#br16)[Planificación](#br16)

[3.1](#br16)[ ](#br16)[Entorno](#br16)[ ](#br16)[Y](#br16)[ ](#br16)[Configuración](#br16)[ ](#br16)[De](#br16)[ ](#br16)[Las](#br16)[ ](#br16)[Pruebas](#br16)

[3.2](#br17)[ ](#br17)[Criterios](#br17)[ ](#br17)[de](#br17)[ ](#br17)[Inicio](#br17)

[3.3](#br17)[ ](#br17)[Criterios](#br17)[ ](#br17)[de](#br17)[ ](#br17)[Aprobación](#br17)[ ](#br17)[/](#br17)[ ](#br17)[Rechazo](#br17)

[3.4](#br17)[ ](#br17)[Equipo](#br17)[ ](#br17)[De](#br17)[ ](#br17)[Pruebas](#br17)[ ](#br17)[Y](#br17)[ ](#br17)[Responsabilidades](#br17)

[4](#br18)[ ](#br18)[Resultados](#br18)

[4.1](#br21)[ ](#br21)[Riesgos](#br21)





[INTRODUCCIÓN](#br3)

[OBJETIVO](#br3)

Este plan maestro de pruebas sirve como guía proporcionando información y el

marco requerido para planificar y desarrollar las actividades del proceso de

pruebas del Sistema CARPART.

[REFERENCIA](#br3)

· ISO 29119

· ISO 9126

· ISO/IEC 25010 (Describe los tipos y niveles de pruebas de software).

· Especificación de Requerimientos del Proyecto

[ALCANCE](#br3)

El presente documento contiene las directrices para la estrategia, planeación,

ejecución y manejo de los resultados de la disciplina de pruebas para los Sistemas

de Información que estén en etapa de desarrollo.

[CONTEXTO](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[LAS](#br3)[ ](#br3)[PRUEBAS](#br3)

[PROYECTO](#br3)

El sistema CARPART - Sistema de Inventario consta de los siguientes módulos y

sub módulos:

Perfil 1:

\-

Administrador de Productos y Vendedores

Módulos:

\-

\-

\-

Gestionar Perfil Vendedor

Gestionar Modulo Producto

Generar Reporte de Ventas

Perfil 2:

Vendedor de Productos

\-





Módulos:

\-

\-

\-

Configurar Perfil Vendedor

Vender producto

Generar Reporte de Ventas

[OBJETIVOS](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[LAS](#br3)[ ](#br3)[PRUEBAS](#br3)

En estos Módulos se realizarán pruebas para validar:

\-

\-

La visualización de los datos, ingresados o modificados.

La operación de los servicios, para dar respuesta a los productos del sistema

CARPART

\-

\-

La respuesta y realización de las Funciones de cada módulo.

La secuencia lógica de las funcionalidades.

[ESTRATEGIA](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[PRUEBAS](#br3)

Las pruebas para el sistema CARPART – Sistema de inventario incluirán los

siguientes Niveles de pruebas:

\-

Pruebas de Componentes / Unitarias

Las Pruebas de Componentes son la primera fase de las pruebas dinámicas

y se realizan sobre cada módulo o componente del software que se pueda

probar de forma independiente.

El objetivo es comprobar que el componente está correctamente codificado,

soportando el ingreso de datos erróneos o inesperados y demostrando así la

capacidad de tratar errores de manera controlada.

\-

\-

Pruebas de Integración

Antes de las pruebas de integración, los componentes tuvieron que haber

pasado sus pruebas unitarias, por lo que el enfoque ahora es sobre el flujo

de control entre los módulos.

Pruebas de Sistema (local o servidor, antes de salir a producción):

Reúne todos los niveles anteriormente mencionados en una prueba total de

todas las funcionalidades más relevantes del sistema, dando así una versión

completa del objetivo general de CARPART, una versión lo más semejante

al ambiente productivo.





[DISEÑO](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[CASOS](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[PRUEBA](#br3)

De acuerdo a la estrategia de pruebas, los casos de prueba son ejecutados por

componentes según los niveles de pruebas, mediante el tipo de prueba Dinámica

que se realiza mientras el código está en ejecución. Se podría decir también que

éste documento hace parte del tipo de prueba estática por lo que el código aún no

está ejecutándose.

Se aplicarán casos de pruebas de tipo dinámicas, las cuales comprenderán de las

siguientes técnicas y niveles:

[TÉCNICA](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[CAJA](#br3)[ ](#br3)[NEGRA:](#br3)

La técnica de caja negra, se enfoca en probar el sistema sin tomar en cuenta la

estructura interna del mismo, su objetivo es validar que las salidas sean las

esperadas. Hay varios tipos de pruebas de caja negra que son posibles, pero si

consideramos la variante principal, a continuación, se mencionan las dos

fundamentales: Prueba Funcional y Prueba No Funcional.

Para probar el conjunto de funciones, se diseñan los casos de pruebas funcionales

con las siguientes técnicas de caja negra:

· Casos de Uso

· Partición de Equivalencia

[NIVEL](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[PRUEBAS](#br3)[ ](#br3)[POR](#br3)[ ](#br3)[COMPONENTES](#br3)[ ](#br3)[O](#br3)[ ](#br3)[PRUEBAS](#br3)[ ](#br3)[UNITARIAS](#br3)

\-

Casos de uso del Perfil 1 (Administrador):

Identificador

CU001

Nombre

Registrar o crear usuario vendedor

Requerimiento de prueba

RF001

Precondiciones

·

Sí a un empleado de la empresa se le ha asignado la función de vender productos de determinada

categoría, este deberá ser registrado por el usuario del sistema CARPART que tenga el rol de

Administrador.

En el login los campos no deben ir en blanco o con información errada. Las credenciales para

acceder como Administrador son creadas desde el momento que se crea la base de datos.

·

Objetivo

·

Permitir al usuario con rol de Administrador crear el usuario vendedor con su respectiva

información como nombre y nivel de acceso en el sistema.

Flujo Principal o Pasos





\1. El caso de uso inicia cuando el usuario Administrador ejecuta la aplicación mediante el login.

\2. El modulo presenta un menú sidebar de lado izquierdo con el botón ‘Accesos’ > ‘Admin. Usuarios’

\3. El módulo presenta formulario para crear nuevo usuario, campos para ingresar los datos del

nuevo vendedor tales como nombre que lo identifica y contraseña.

\4. El usuario ingresa los campos: nombre, nombre de usuario, contraseña y rol y daclic en “Guardar”.

\5. Si la información es correcta el módulo manda el mensaje **“Cuenta de usuario ha sido creada”**.

\6. El nuevo usuario se muestra en la lista de Usuarios.

\7. Fin de caso de uso.

Resultado Esperado

El nuevo usuario aparece en la tabla del ítem del sidebar izquierdo, llamado Administrar Usuarios.

Partición de Equivalencia del Caso de Uso 1:

**Probar la creación de un nuevo perfil Vendedor con los mismos datos con los**

**que se creó previamente un perfil anterior, tiene como salida un ‘Error en esta**

**consulta’, por lo tanto, probar con cualquier valor de cada conjunto de la clase**

**es suficiente para probar el escenario anterior, precondicionando de esta**

**manera al usuario que no debe crear dos perfiles con los mismos datos.**

Identificador

CU002

Nombre

Crear un Producto

Requerimiento de prueba

RF002

Precondiciones

·

·

Contabilizar manualmente las unidades de los repuestos antes de ser registrados en el sistema.

Sólo el Administrador del sistema CARPART puede agregar o crear un producto en el inventario.

Objetivo

·

Permitir al usuario con rol de Administrador crear o agregar un producto de acuerdo a su categoría

y a la información que de forma preliminar se suministra por parte de la empresa.

Flujo Principal o Pasos





\1. El caso de uso inicia cuando el usuario Administrador ejecuta la aplicación mediante el login.

\2. El módulo presenta un menú sidebar a lado izquierdo de la pantalla, allí se da clic en el botón

llamado Categorías y se accede para tipear el nombre de una nueva categoría.

\3. Dar clic en el botón ‘Agregar Categoría’.

\4. Si la ejecución es correcta el módulo manda el mensaje **“Categoría Agregada Exitosamente”**.

\5. En el menú sidebar presenta el botón llamado ‘Media’, dar clic en él y acceder a la tabla que permite

subir una foto de la imagen de la nueva categoría que hayamos nombrado.

\6. Elegir el archivo de imagen dando clic en el botón ‘Elegir Archivo’ y una vez subido dar clic en el

botón ‘Subir’

\7. Si la ejecución es correcta el módulo manda el mensaje **“Imagen subida al servidor”**.

\8. En el menú sidebar presenta el botón llamado ‘Productos’, dar clic en él y acceder a la tabla que

permite visualizar y administrar productos.

\9. Dar clic en el botón ‘Agregar Producto’ el cual nos lleva al formulario que nos permite ingresar la

información del producto que el Administrador quiere ingresar al inventario.

\10. Llenar los campos que requiere de forma obligatoria el formulario tipeando la referencia del

producto, eligiendo su correspondiente categoría, seleccionando una imagen que previamente se

subió por medio del sub módulo ’Media’, tipeamos la cantidad en números, el precio de compra, el

precio de venta y dar clic al botón ‘Agregar Producto’.

\11. Si la ejecución es correcta el módulo manda el mensaje **“Producto agregado exitosamente”**.

\12. Fin de caso de uso.

Resultado esperado de la ejecución del caso de prueba

·

La nueva categoría se visualiza en la tabla del botón categorías, en la sección ‘Lista de

categorías’.

·

·

El archivo de la imagen se visualiza en la tabla de la interfaz llamada ‘Media’

El producto inventariado, agregado después de los pasos anteriores, se puede visualizar en

el panel de control en la sección ‘Productos Recientemente Añadidos’ listo para su venta.

Partición de Equivalencia del Caso de Uso 2:

**Probar la creación de una nueva Categoría con la misma información con la**

**que se creó previamente una categoría anterior, tiene como salida un ‘Error**

**en esta consulta’, por lo tanto, probar con cualquier valor de cada conjunto de**

**la clase es suficiente para probar el escenario anterior, precondicionando de**

**esta manera al usuario que no debe crear dos categorías con el mismo**

**nombre.**





Identificador

CU003

Nombre

Generar o crear una Venta.

Requerimiento de prueba

RF009

Precondiciones

·

De forma previa para que exista una venta debe existir un producto creado por el perfil del

Administrador del sistema.

Objetivo

Permitir al usuario con rol de Administrador pueda generar, crear y por ende agregar una o varias

·

ventas de productos del inventario.

Flujo Principal o Pasos

\1. El caso de uso inicia cuando el usuario Administrador ejecuta la aplicación mediante el login.

\2. El módulo presenta un menú sidebar a lado izquierdo de la pantalla, allí se visualiza el botón

‘Ventas’ el cual permite visualizar los botones ‘Administrar Ventas’ y ‘Agregar Venta’.

\3. Para el caso de uso de creación de una venta se da click en el botón de ‘Agregar Venta’ el cual

proporciona inicialmente un buscador en el cual se parametriza escribiendo la información del

producto que se quiere vender y que previamente se ha creado por el Administrador.

\4. Al escribir en el input del campo de búsqueda de productos se puede visualizar por medio de un

autocompletado los productos relacionados a la información ingresada en el input o buscador de

productos.

\5. Al identificar el producto se le da click encima posicionándolo así en el input y se da click al botón

‘Búsqueda’, visualizando de esta manera la información del producto en una tabla.

\6. Al tener visualizado el producto hay un botón ‘Agregar’ que nos permite agregar la venta en nuestra

tabla del módulo ‘Administrar Ventas´, el cual también se verá reflejado en el reporte de ventas.

\7. Al agregarse la venta sale en pantalla un mensaje que dice ‘Venta agregada’

\8. Fin de caso de uso.

Resultado esperado de la ejecución del caso de prueba

·

Que la venta agregada se visualice en la tabla luego de dar click en el botón

‘Administrar Ventas’.





Identificador

CU004

Nombre

Generar Reporte de Ventas.

Requerimiento de prueba

RF003

Precondiciones

·

Desde el Dashboard llamado Panel de Control al cual se puede acceder desde el menú sidebar el

Administrador del Sistema puede visualizar las ventas que se han realizado.

Objetivo

Permitir al usuario con rol de Administrador generar uno o varios reportes de ventas por ventas

·

mensuales, ventas diarias o por rango entre dos fechas en particular.

Flujo Principal o Pasos

\1. El caso de uso inicia cuando el usuario Administrador ejecuta la aplicación mediante el login.

\2. El módulo presenta un menú sidebar a lado izquierdo de la pantalla, allí se visualiza el botón ‘Panel

de Control’ el cual permite visualizar un Dashboard que describe los productos vendidos en

determinadas fechas y cantidades.

\3. En el mismo menú hay un botón llamado Reporte de Ventas el cual permite acceder a una lista de

botones que permite generar tres reportes: Por rango de fechas, por ventas mensuales y ventas

diarias’.

\4. Se da clic en ‘Ventas por fecha’ de la lista de reportes, el cual nos permite elegir dos fechas, una

inicial y otra final creando así un rango de tiempo en el cual recoge todas las ventas realizadas entre

una fecha y la otra.

\5. Se da clic en el botón ‘Generar Reporte’, el cual lanza en otra pestaña del navegador un archivo en

formato pdf el cual se puede visualizar para su posterior descarga.

\6. Manejo de error: si no se elige alguna de las fechas del rango ya sea la fecha inicial o final el sistema

arroja un mensaje que dice **“Fecha no puede estar en blanco”**.

\7. Fin de caso de uso.

Resultado esperado de la ejecución del caso de prueba

·

El reporte de las ventas descrito en una tabla dibujada en un archivo con formato PDF listo

para ser descargado e impreso.

Del conjunto de casos de pruebas definidos, deberán identificarse aquellos que

formarán parte del conjunto de pruebas que deberán realizarse para asegurar el

correcto despliegue de la aplicación.





\-

Casos de uso del Perfil 2 (Vendedor):

Identificador

CU005

Nombre

Generar o crear una Venta.

Requerimiento de prueba

RF009

Precondiciones

·

·

·

De forma previa para que exista una venta debe existir un producto creado por el perfil del

Administrador del sistema.

Al vendedor se le asignará un usuario y una contraseña que el Administrador previamente ha

creado al momento de registrar los datos del perfil del vendedor.

Sólo el perfil de Administrador puede crear perfiles de vendedores.

Objetivo

Permitir al usuario con rol de Vendedor generar, crear y por ende agregar una o varias ventas de

·

productos del inventario.

Flujo Principal o Pasos

\1. El caso de uso inicia cuando el usuario Vendedor ejecuta la aplicación mediante el login.

\2. El módulo presenta un menú sidebar a lado izquierdo de la pantalla, allí se visualiza el botón

‘Ventas’ el cual permite visualizar los botones ‘Administrar Ventas’ y ‘Agregar Venta’.

\3. Para el caso de uso de creación de una venta se da click en el botón de ‘Agregar Venta’ el cual

proporciona inicialmente un buscador en el cual se parametriza escribiendo la información del

producto que se quiere vender y que previamente se ha creado por el Administrador.

\4. Al escribir en el input del campo de búsqueda de productos se puede visualizar por medio de un

autocompletado los productos relacionados a la información ingresada en el input o buscador de

productos.

\5. Al identificar el producto se le da click encima posicionándolo así en el input y se da click al botón

‘Búsqueda’, visualizando de esta manera la información del producto en una tabla.

\6. Al tener visualizado el producto hay un botón ‘Agregar’ que nos permite agregar la venta en nuestro

reporte de ventas, el cual también se verá reflejado en el reporte de ventas del Administrador.

\7. Al agregarse la venta sale en pantalla un mensaje que dice ‘Venta agregada’

\8. Fin de caso de uso.

Resultado esperado de la ejecución del caso de prueba

·

Que la venta agregada se visualice en la tabla luego de dar click en el botón

‘Administrar Ventas’.





Identificador

CU006

Nombre

Generar Reporte de Ventas.

Requerimiento de prueba

RF003

Precondiciones

·

Se puede acceder desde el menú sidebar al ‘Reporte de Ventas’

Objetivo

Permitir al usuario con rol de Vendedor generar uno o varios reportes de ventas por ventas

·

mensuales, ventas diarias o por rango entre dos fechas en particular.

Flujo Principal o Pasos

\1. El caso de uso inicia cuando el usuario Vendedor ejecuta la aplicación mediante el login.

\2. El módulo presenta un menú sidebar a lado izquierdo de la pantalla, allí se visualiza el botón

‘Ventas’ el cual permite visualizar otro botón llamado ‘Administrar Ventas’ que describe los

productos vendidos en determinadas fechas y cantidades.

\3. En el mismo menú sidebar hay un botón llamado Reporte de Ventas el cual permite acceder a una

lista de botones que permite generar tres reportes: Por rango de fechas, por ventas mensuales y

ventas diarias’.

\4. Se da clic en ‘Ventas por fecha’ de la lista de reportes, el cual nos permite elegir dos fechas, una

inicial y otra final creando así un rango de tiempo en el cual recoge todas las ventas realizadas entre

una fecha y la otra.

\5. Se da clic en el botón ‘Generar Reporte’, el cual lanza en otra pestaña del navegador un archivo en

formato PDF el cual se puede visualizar para su posterior descarga.

\6. Manejo de error: si no se elige alguna de las fechas del rango ya sea la fecha inicial o final el sistema

arroja un mensaje que dice **“Fecha no puede estar en blanco”**.

\7. Fin de caso de uso.

Resultado esperado de la ejecución del caso de prueba

·

El reporte de las ventas descrito en una tabla dibujada en un archivo con formato PDF listo

para ser descargado e impreso.





[NIVEL](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[PRUEBAS](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[INTEGRACIÓN](#br3)

Las pruebas de integración pretenden verificar que el conjunto de los módulos del sistema

funciona adecuadamente en conjunto. Para ello mediante un Caso de Prueba dinámica

con técnica de caja negra se demostrará la funcionalidad entre el módulo de crear un

producto y el módulo de generar una venta.

Con un enfoque ascendente se describe la prueba de integración de la siguiente manera:

Identificador

Nombre

Prueba de Integración

Requerimiento de prueba

RF002 y RF009

Crear un Producto y Crear una Venta

Precondiciones

·

·

No se crea una venta si no se crea de forma previa un producto.

Sólo el perfil Administrador puede crear un producto y consecutivamente una venta.

Objetivo

·

·

Permitir al usuario con rol de Administrador crear o agregar un producto de acuerdo a su categoría

y a la información que de forma preliminar se suministra por parte de la empresa.

Permitir al usuario con rol de Administrador generar, crear y por ende agregar una o varias ventas

de productos del inventario.

Flujo Principal o Pasos

\1. El caso de uso inicia cuando el usuario Administrador ejecuta la aplicación mediante el login.

\2. El módulo presenta un menú sidebar a lado izquierdo de la pantalla, allí se da clic en el botón

llamado Categorías y se accede para tipear el nombre de una nueva categoría.

\3. Dar clic en el botón ‘Agregar Categoría’.

\4. Si la ejecución es correcta el módulo manda el mensaje **“Categoría Agregada Exitosamente”**.

\5. En el menú sidebar presenta el botón llamado ‘Media’, dar clic en él y acceder a la tabla que permite

subir una foto de la imagen de la nueva categoría que hayamos nombrado.

\6. Elegir el archivo de imagen dando clic en el botón ‘Elegir Archivo’ y una vez subido dar clic en el

botón ‘Subir’

\7. Si la ejecución es correcta el módulo manda el mensaje **“Imagen subida al servidor”**.

\8. En el menú sidebar presenta el botón llamado ‘Productos’, dar clic en él y acceder a la tabla que

permite visualizar y administrar productos.

\9. Dar clic en el botón ‘Agregar Producto’ el cual nos lleva al formulario que nos permite ingresar la

información del producto que el Administrador quiere ingresar al inventario.

\10. Llenar los campos que requiere de forma obligatoria el formulario tipeando la referencia del

producto, eligiendo su correspondiente categoría, seleccionando una imagen que previamente se

subió por medio del sub módulo ’Media’, tipeamos la cantidad en números, el precio de compra, el





precio de venta y dar clic al botón ‘Agregar Producto’.

\11. Si la ejecución es correcta el módulo manda el mensaje **“Producto agregado exitosamente”**.

\12. El módulo presenta un menú sidebar a lado izquierdo de la pantalla, allí se visualiza el botón

‘Ventas’ el cual permite visualizar los botones ‘Administrar Ventas’ y ‘Agregar Venta’.

\13. Para el caso de uso de creación de una venta se da click en el botón de ‘Agregar Venta’ el cual

proporciona inicialmente un buscador en el cual se parametriza escribiendo la información del

producto que se quiere vender.

\14. Al Escribir en el input del campo de búsqueda de productos se puede visualizar por medio de un

autocompletado los productos relacionados a la información ingresada en el input o buscador de

productos.

\15. Al identificar el producto se le da click encima posicionándolo así en el input y se da click al botón

‘Búsqueda’, visualizando de esta manera la información del producto en una tabla.

\16. Al tener visualizado el producto hay un botón ‘Agregar’ que nos permite agregar la venta en nuestro

reporte de ventas, el cual también se verá reflejado en el reporte de ventas del Administrador.

\17. Al agregarse la venta sale en pantalla un mensaje que dice ‘Venta agregada’

\18. Fin de prueba de integración.

Resultado esperado de la ejecución del caso de prueba

·

La nueva categoría se visualiza en la tabla del botón categorías, en la sección ‘Lista de

categorías’.

·

·

El archivo de la imagen se visualiza en la tabla de la interfaz llamada ‘Media’

El producto inventariado, agregado después de los pasos anteriores, se puede visualizar en

el panel de control en la sección ‘Productos Recientemente Añadidos’ listo para su venta.

La venta agregada se visualiza en la tabla del botón ‘Administrar Ventas’.

·

[NIVEL](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[PRUEBAS](#br3)[ ](#br3)[DEL](#br3)[ ](#br3)[SISTEMA](#br3)

Para verificar que se hayan integrado adecuadamente todos los Componentes del

sistema y que realizan las funciones apropiadas, se diseña una prueba de sistema que

consiste mediante el tipo de prueba dinámica demostrar desde el inicio del sistema que se

ejecuta mediante el login y siguiendo el flujo de procesos funcionales hasta terminar con

el logout del usuario. Confirmando de esta manera que los requisitos previstos han sido

cumplidos.

[PRUEBA](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[SEGURIDAD:](#br3)

Se verifica mediante esta prueba que los mecanismos de protección evitarán accesos

inapropiados al sistema. El caso de prueba que llevará a cabo la validación de seguridad

se describe de la siguiente manera:





Identificador

Tipo de Prueba

Prueba de Seguridad

Técnica de Prueba

Técnica de Caja Negra

Precondiciones

Prueba Dinámica

Objetivo:

Probar la seguridad del acceso al sistema por Login

·

·

·

Las credenciales para acceder como Administrador son creadas desde el momento que se crea la

base de datos.

Al perfil de vendedor se le asignará un usuario y una contraseña que el Administrador previamente

ha creado al momento de registrar los datos de dicho perfil.

Sólo el perfil de Administrador puede crear perfiles de vendedores.

Flujo Principal o Pasos

\1. El caso de uso inicia cuando el usuario Administrador o Vendedor ejecutan la aplicación mediante el

login.

\2. Para comprobar la seguridad del sistema se hacen ingresos de datos errados, se ingresa una palabra

aleatoria tanto para el campo de escritura de Usuario como del Password.

\3. Si el código de forma interna está estructurado para evitar los ingresos inapropiados, entonces

validará que los datos ingresados de forma errada no corresponden a el algoritmo ni al código que

trabaja de forma interna en el sistema.

\4. Si la información es incorrecta el módulo manda el mensaje **“Nombre de usuario y/o contraseña**

**incorrecta”**.

\5. Fin de prueba de seguridad

Resultado Esperado

Se valida y se comprueba que efectivamente no se puede ingresar al sistema si los datos del login están

errados, se espera un mensaje alerte ‘Nombre de usuario y/o contraseña incorrecta’

[TÉCNICA](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[CAJA](#br3)[ ](#br3)[BLANCA](#br3)

Para la prueba de seguridad también se implementa la técnica de caja blanca que examina

el código interno que valida el ingreso inapropiado de datos en el módulo del login del

sistema:





[PLANIFICACIÓN](#br3)

[ENTORNO](#br3)[ ](#br3)[Y](#br3)[ ](#br3)[CONFIGURACIÓN](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[LAS](#br3)[ ](#br3)[PRUEBAS](#br3)

Para el proceso de pruebas del proyecto se requiere de la disponibilidad de los

siguientes entornos, a saber:

**a.** Servidor Local instalado en entorno del sistema operativo Windows 10 con

conexión a Internet.

· Equipo Marca ACER Aspire A315-51 (2.30GHz), 8GB RAM, 1T HDD,

1366x768 LCD (60 Hz), Windows 10 Home Single Language version 1909.

**b.** Herramienta para la ejecución de Pruebas de Software:

· CYPRESS version 11.2.0

**c.** Base de Datos SQL. Reside en equipo de servidor de Pruebas detallado en el

punto a del entorno y configuración de las pruebas.

Todos ellos configurados por el equipo de desarrollo.





[CRITERIOS](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[INICIO](#br3)

Aceptación del plan de pruebas. Revisión y aceptación del documento que

contiene los casos de pruebas para la certificación del proyecto.

Aceptación de paquetes. Revisión y aceptación de los paquetes de desarrollo, y

que este cumpla con las condiciones de aceptación.

Aceptación de ambiente. Revisión y aceptación del ambiente de certificación, y

que este cumpla con las condiciones de aceptación.

[CRITERIOS](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[APROBACION](#br3)[ ](#br3)[/](#br3)[ ](#br3)[RECHAZO](#br3)

**Errores Graves:** información crítica presentada erróneamente, información mal

registrada en la base de datos, caídas de programas, incumplimiento de objetivos

en funciones principales, etc.

**Errores Medios** (comunes): errores en documentos impresos que se entregan a

personas ajenas a la organización, errores en presentación de datos,

incumplimiento de objetivos en funciones secundarias, caídas de programas

auxiliares, etc.

**Errores Leves:** errores en presentación de datos secundarios, no adecuación a

estándares, comportamientos correctos pero diferentes en situaciones similares,

dificultades de operación, etc.

[EQUIPO](#br3)[ ](#br3)[DE](#br3)[ ](#br3)[PRUEBAS](#br3)[ ](#br3)[Y](#br3)[ ](#br3)[RESPONSABILIDADES](#br3)

Nombre

Responsabilidad

Jonathan Meza

Daniel Aguilar

Jefe de Proyectos, responsable de

evaluar las condiciones de término

para el proceso de pruebas junto al

Analista Funcional.

Analista funcional, responsable de la

resolución de las incidencias de

certificación para los módulos de

Proyectos, Revisión y Aprobación.

Testing de Solución, responsable de la

generación del plan de pruebas.

Jonathan Meza,

Daniel Aguilar





[RESULTADOS](#br3)

El proceso de pruebas finaliza cuando están implementados todos los

requerimientos y se encuentran el 100 % de las pruebas ejecutadas y pasadas

satisfactoriamente, no deben existir errores críticos.

Para el reporte de los resultados de las pruebas se implementará la herramienta

llamada ALLURE que nos permitirá visualizar los resultados con un reporte

estadístico en HTML.

Resultados Nivel de Pruebas Unitarias:

Perfil 1: Administrador





Perfil 2: Vendedor

Resultados Nivel de Prueba de Integración:

Relación entre el módulo de crear producto y crear una venta





Resultados Nivel de Pruebas de Sistema:

Prueba de seguridad del sistema (Passed)





Reporte estadístico del 100% de las pruebas implementadas y enunciadas en este plan:





[RIESGOS](#br3)

Los siguientes son los posibles riesgos que pueden afectar la ejecución exitosa del

plan de prueba:

**Riesgos**

Agotar el tiempo de pruebas estimado

para el proyecto, sin que se haya

podido

**Estrategia de Mitigación**

Tener los requerimientos aprobados,

claros, objetivos y de fácil

entendimiento.

realizar parcial o totalmente el proceso Programación de fechas de entrega

de

pruebas.

intermedias y final de producto.

Indicando en cada iteración la

funcionalidad incluida.

Incumplir alguno de los aspectos

técnicos

(software, plataforma)

Disponibilidad del personal para

realizar

Habilitar Ambiente de prueba con

características similares al ambiente

productivo.

Disponibilidad de personal con

conocimientos especializados en

la creación y ejecución de las pruebas. alguna herramienta.

Capacitación de los usuarios en las

herramientas de pruebas

(funcional y técnica, pruebas manuales

y automáticas)

Retrasos en el desarrollo del software

Verificar los motivos y verificar con el

grupo funcional las alternativas y

actualización de cronograma de

proyecto.


