# BachApp

## Introducción

##### Aplicacion Web para reportar baches en la ciudad, mientras que los encargados de mantenimiento de calles pueden encontrar los lugares exactos y tener una mejor idea de la gravedad y el material necesario para repararlos gracias a las fotografias.

### Link al Tiktok

### Diagrama de Azure


### Precio Total por mes
##### Pruebas
| Servicio | Descripcion | Precio Estimado Mensual |
| ------ | ------ | ------ |
| Virtual Machine | 1 F2 (2 vCPUs, 4 GB RAM) x 730 Hours (Pay as you go), Linux,  (Pay as you go); 1 managed disk – E4, 100 transaction units; Inter Region transfer type, 5 GB outbound data transfer from East US to Central US | $74.87 |
|  | Total | $74.87|
##### Producción

| Servicio | Descripcion | Precio Estimado Mensual |
| ------ | ------ | ------ |
| App Service | Basic Tier; 1 B1 (1 Core(s), 1.75 GB RAM, 10 GB Storage) x 730 Hours; Linux OS | $12.41 |
| Azure SQL Database | Single Database, vCore, {1}, General Purpose, Provisioned, Gen 5, Local Redundancy, 1 - 4 vCore instance(s), 1 year reserved, 10 GB Storage, 1 GB Backup Storage | $582.23 |
| Storage Accounts | Block Blob Storage, Blob Storage, LRS Redundancy, Hot Access Tier, 1000 GB Capacity - Pay as you go, 100,000 Write operations, 100,000 List and Create Container Operations, 100,000 Read operations, 100,000 Archive High Priority Read, 1 Other operations. 1000 GB Data Retrieval, 1000 GB Archive High Priority Retrieval, 1000 GB Data Write | $21.84 |
|  | Total | $616.48 |

### TCO 3 años
![Ahorro en 3 Años](docs/TCO_1.jpg)
![Comparacion de gastos](docs/TCO_2.jpg)
![Resumen detallado](docs/TCO_3.jpg)

### SLA Compuesto
| Elemento | SLA |
| ------ | ------ |
| App Service | 99.95% |
| Blob Storage (LRS) | 99.9% |
| Azure SQL Database | 99.99% |
| TOTAL | 99.84% |

### Tiempo sin disponibilidad a un año

### Qué te pareció el evento