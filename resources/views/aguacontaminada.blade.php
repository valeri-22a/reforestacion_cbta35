<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Ejes de diagnóstico y soluciones hídricas para el plantel
$soluciones_agua = [
    [
        'id'          => 'diagnostico',
        'titulo'      => 'Diagnóstico: Pozo y Desabasto',
        'subtitulo'   => 'Situación actual en el plantel',
        'categoria'   => 'Diagnostico',
        'etiqueta'    => 'Problemática Central',
        'impacto'     => 'Crítico (Sanitarios e higiene)',
        'costo'       => 'Requiere intervención inmediata',
        'alcance'     => 'Toda la comunidad estudiantil',
        'perfil'      => 'El pozo propio quedó inhabilitado por contaminación para el consumo humano, y las reservas actuales se agotan rápido dejando sin agua a los sanitarios.',
        'detalles'    => [
            'Inutilización del agua subterránea para consumo directo de los alumnos.',
            'Agotamiento acelerado de tinacos y cisternas en horas pico.',
            'Días sin servicio en los baños y generación de malos olores.'
        ],
        'svg' => '
            <svg viewBox="0 0 320 200" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="bgDiag" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#f5efe6"/><stop offset="100%" stop-color="#e6dac8"/>
                    </linearGradient>
                </defs>
                <rect width="320" height="200" fill="url(#bgDiag)"/>
                <path d="M0 165 Q160 158 320 165 L320 200 L0 200 Z" fill="#c7b69f"/>
                <!-- Estructura de pozo cerrado -->
                <rect x="115" y="105" width="90" height="60" rx="4" fill="#8c7a6b"/>
                <rect x="110" y="98" width="100" height="10" rx="2" fill="#6e5d4f"/>
                <path d="M125 98 L125 60 M195 98 L195 60" stroke="#5a4a3f" stroke-width="5"/>
                <polygon points="105,62 160,32 215,62" fill="#4a3b32"/>
                <!-- Símbolo de alerta / gota restringida -->
                <circle cx="160" cy="135" r="18" fill="#ffffff" opacity="0.9"/>
                <path d="M160 123 C160 123 151 134 151 139 A9 9 0 0 0 169 139 C169 134 160 123 160 123 Z" fill="#b85d19"/>
                <line x1="149" y1="146" x2="171" y2="124" stroke="#9e2a2b" stroke-width="3" stroke-linecap="round"/>
            </svg>'
    ],
    [
        'id'          => 'tratamiento-pozo',
        'titulo'      => 'Filtrado y Red Independiente',
        'subtitulo'   => 'Reaprovechamiento seguro del pozo',
        'categoria'   => 'Infraestructura',
        'etiqueta'    => 'Solución 01 · Pozo',
        'impacto'     => 'Alto (Abasto continuo en baños)',
        'costo'       => 'Inversión media',
        'alcance'     => 'Sanitarios y áreas de limpieza',
        'perfil'      => 'Tratar el agua del pozo para eliminar turbidez y malos olores, canalizándola por tubería independiente exclusivamente hacia los inodoros.',
        'detalles'    => [
            'Tren de filtración con grava, arena sílica y carbón activado.',
            'Cloración controlada para neutralizar bacterias y olores.',
            'Red morada (agua no potable) separada por completo de lavabos.'
        ],
        'svg' => '
            <svg viewBox="0 0 320 200" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="bgFilt" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#eaf2f5"/><stop offset="100%" stop-color="#d5e5eb"/>
                    </linearGradient>
                </defs>
                <rect width="320" height="200" fill="url(#bgFilt)"/>
                <path d="M0 172 L320 172 L320 200 L0 200 Z" fill="#b5cad4"/>
                <!-- Tanque de filtrado multicapa -->
                <rect x="115" y="45" width="90" height="127" rx="8" fill="#ffffff" stroke="#2b5b6c" stroke-width="3"/>
                <rect x="118" y="55" width="84" height="30" fill="#76b5c5" opacity="0.5"/>
                <rect x="118" y="85" width="84" height="26" fill="#525252"/>
                <rect x="118" y="111" width="84" height="28" fill="#d4b483"/>
                <rect x="118" y="139" width="84" height="30" fill="#8d99ae"/>
                <!-- Tubería morada de salida -->
                <path d="M205 150 L255 150 L255 172" stroke="#7b2cbf" stroke-width="8" fill="none" stroke-linecap="round"/>
                <path d="M65 65 L115 65" stroke="#457b9d" stroke-width="8" fill="none" stroke-linecap="round"/>
            </svg>'
    ],
    [
        'id'          => 'cosecha-lluvia',
        'titulo'      => 'Captación de Agua Pluvial',
        'subtitulo'   => 'Sistema SCALL en techos de aulas',
        'categoria'   => 'Infraestructura',
        'etiqueta'    => 'Solución 02 · Lluvia',
        'impacto'     => 'Alto (Reserva de agua limpia)',
        'costo'       => 'Inversión media',
        'alcance'     => 'Lavabos y limpieza general',
        'perfil'      => 'Aprovechar las lluvias de verano mediante canaletas en los edificios escolares para almacenar miles de litros de agua limpia en cisternas.',
        'detalles'    => [
            'Instalación de canaletas y bajantes pluviales en techos amplios.',
            'Separador de primeras lluvias para desviar polvo y hojas.',
            'Almacenamiento en cisternas modulares para días de escasez.'
        ],
        'svg' => '
            <svg viewBox="0 0 320 200" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="bgLluv" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#edf4f7"/><stop offset="100%" stop-color="#d8e6ed"/>
                    </linearGradient>
                </defs>
                <rect width="320" height="200" fill="url(#bgLluv)"/>
                <!-- Nube y gotas -->
                <path d="M95 55 A18 18 0 0 1 128 45 A22 22 0 0 1 168 50 A16 16 0 0 1 182 72 L95 72 Z" fill="#8ecae6"/>
                <line x1="115" y1="80" x2="110" y2="92" stroke="#219ebc" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="140" y1="80" x2="135" y2="92" stroke="#219ebc" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="165" y1="80" x2="160" y2="92" stroke="#219ebc" stroke-width="2.5" stroke-linecap="round"/>
                <!-- Techo y tinaco -->
                <polygon points="60,120 140,95 210,120" fill="#2b5b6c"/>
                <rect x="75" y="120" width="120" height="55" fill="#e9ecef"/>
                <path d="M210 120 L235 120 L235 135" stroke="#1d3557" stroke-width="4" fill="none"/>
                <rect x="215" y="135" width="44" height="40" rx="5" fill="#1b3b2b"/>
                <rect x="219" y="148" width="36" height="23" fill="#4ea8de" opacity="0.8"/>
            </svg>'
    ],
    [
        'id'          => 'banos-ecologicos',
        'titulo'      => 'Sanitarios de Bajo Consumo',
        'subtitulo'   => 'Mingitorios secos y llaves ahorradoras',
        'categoria'   => 'Ahorro',
        'etiqueta'    => 'Solución 03 · Sanitarios',
        'impacto'     => 'Inmediato (-50% consumo)',
        'costo'       => 'Inversión baja-media',
        'alcance'     => 'Módulos sanitarios del plantel',
        'perfil'      => 'Modernizar los muebles de baño para frenar el vaciado rápido de los tinacos y sellar el retorno de malos olores del drenaje.',
        'detalles'    => [
            'Mingitorios ecológicos secos con válvulas antirretorno sin agua.',
            'Inodoros con descarga dual eficiente (3 y 6 litros).',
            'Llaves temporizadas en lavabos para evitar grifos abiertos.'
        ],
        'svg' => '
            <svg viewBox="0 0 320 200" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="bgBan" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#eef5f0"/><stop offset="100%" stop-color="#dae8de"/>
                    </linearGradient>
                </defs>
                <rect width="320" height="200" fill="url(#bgBan)"/>
                <!-- Gota con símbolo de ahorro / hoja -->
                <path d="M160 38 C160 38 112 96 112 128 A48 48 0 0 0 208 128 C208 96 160 38 160 38 Z" fill="#2d6a4f"/>
                <path d="M160 52 C160 52 122 100 122 126 A38 38 0 0 0 198 126 C198 100 160 52 160 52 Z" fill="#40916c"/>
                <path d="M142 132 Q160 105 182 112 Q175 138 142 132 Z" fill="#d8f3dc"/>
                <line x1="142" y1="132" x2="168" y2="118" stroke="#1b4332" stroke-width="2"/>
            </svg>'
    ],
    [
        'id'          => 'higiene-enzimatica',
        'titulo'      => 'Limpieza Enzimática en Seco',
        'subtitulo'   => 'Control biológico de malos olores',
        'categoria'   => 'Gestion',
        'etiqueta'    => 'Solución 04 · Higiene',
        'impacto'     => 'Inmediato (Elimina olores)',
        'costo'       => 'Costo operativo bajo',
        'alcance'     => 'Mantenimiento diario de baños',
        'perfil'      => 'Sustituir el baldeo excesivo con agua limpia por limpiadores biodegradables con enzimas que degradan la materia orgánica.',
        'detalles'    => [
            'Elimina la fuente de los malos olores en tuberías y muebles.',
            'Reduce drásticamente el agua usada en la limpieza diaria.',
            'Seguro para el personal de intendencia y el medio ambiente.'
        ],
        'svg' => '
            <svg viewBox="0 0 320 200" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="bgEnz" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#f3f6f4"/><stop offset="100%" stop-color="#e0e8e3"/>
                    </linearGradient>
                </defs>
                <rect width="320" height="200" fill="url(#bgEnz)"/>
                <!-- Burbujas y destellos de limpieza -->
                <circle cx="160" cy="105" r="42" fill="#52b788" opacity="0.25"/>
                <circle cx="160" cy="105" r="28" fill="#2d6a4f"/>
                <circle cx="115" cy="75" r="14" fill="#74c69d" opacity="0.6"/>
                <circle cx="205" cy="130" r="18" fill="#74c69d" opacity="0.5"/>
                <circle cx="200" cy="70" r="9" fill="#b5945b" opacity="0.7"/>
                <path d="M160 88 L163 102 L177 105 L163 108 L160 122 L157 108 L143 105 L157 102 Z" fill="#ffffff"/>
            </svg>'
    ],
    [
        'id'          => 'brigada-hidrica',
        'titulo'      => 'Monitoreo y Brigada Escolar',
        'subtitulo'   => 'Prevención de fugas y señalética',
        'categoria'   => 'Gestion',
        'etiqueta'    => 'Solución 05 · Comunidad',
        'impacto'     => 'Sostenible a largo plazo',
        'costo'       => 'Mínimo (Organización)',
        'alcance'     => 'Alumnos, docentes y personal',
        'perfil'      => 'Organizar comités estudiantiles para detectar fugas silenciosas, revisar flotadores y señalizar las tomas de agua no potable.',
        'detalles'    => [
            'Inspección semanal de empaques, válvulas y niveles de cisterna.',
            'Señalética clara diferenciando agua potable de agua tratada.',
            'Campañas permanentes de uso responsable dentro del plantel.'
        ],
        'svg' => '
            <svg viewBox="0 0 320 200" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="bgBri" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#f7f4ee"/><stop offset="100%" stop-color="#eae3d5"/>
                    </linearGradient>
                </defs>
                <rect width="320" height="200" fill="url(#bgBri)"/>
                <!-- Escudo de gestión comunitaria -->
                <path d="M160 38 L212 58 L212 104 C212 138 160 164 160 164 C160 164 108 138 108 104 L108 58 Z" fill="#1b3b2b"/>
                <path d="M160 48 L202 65 L202 102 C202 130 160 152 160 152 C160 152 118 130 118 102 L118 65 Z" fill="#2d6a4f"/>
                <polyline points="142,102 155,115 182,86" fill="none" stroke="#d8f3dc" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>'
    ]
];

// Filtro por categoría mediante GET
$filtro = isset($_GET['categoria']) ? $_GET['categoria'] : 'todas';
$items_filtrados = array_filter($soluciones_agua, function($item) use ($filtro) {
    if ($filtro === 'todas') return true;
    return strtolower($item['categoria']) === strtolower($filtro);
});
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión y Saneamiento del Agua en el Plantel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,500&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --crema: #faf8f5;
            --tarjeta: #ffffff;
            --verde-bosque: #1b3b2b;
            --azul-profundo: #1d4e5f;
            --dorado-suave: #b5945b;
            --texto-principal: #222624;
            --texto-secundario: #5a635e;
            --borde: #e5e0d8;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: var(--crema);
            color: var(--texto-principal);
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
            line-height: 1.6;
        }

        .contenedor {
            max-width: 1180px;
            margin: 0 auto;
            padding: 48px 24px 80px;
        }

        /* Encabezado Editorial */
        header {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 40px;
        }

        .subtitulo-superior {
            text-transform: uppercase;
            letter-spacing: 0.18em;
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--dorado-suave);
            display: block;
            margin-bottom: 10px;
        }

        h1 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: clamp(2.2rem, 4vw, 3.2rem);
            font-weight: 700;
            color: var(--verde-bosque);
            margin: 0 0 14px;
            line-height: 1.15;
        }

        header p {
            color: var(--texto-secundario);
            font-size: 1rem;
            margin: 0;
        }

        /* Barra de filtros */
        .barra-filtros {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 44px;
            flex-wrap: wrap;
        }

        .btn-filtro {
            text-decoration: none;
            padding: 9px 22px;
            border-radius: 999px;
            font-size: 0.88rem;
            font-weight: 500;
            color: var(--verde-bosque);
            border: 1px solid var(--borde);
            background: var(--tarjeta);
            transition: all 0.25s ease;
        }

        .btn-filtro:hover {
            border-color: var(--verde-bosque);
        }

        .btn-filtro.activo {
            background: var(--verde-bosque);
            color: #ffffff;
            border-color: var(--verde-bosque);
        }

        /* Cuadrícula de tarjetas */
        .grid-editorial {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 32px;
        }

        .ficha {
            background: var(--tarjeta);
            border: 1px solid var(--borde);
            border-radius: 14px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 30px rgba(27, 59, 43, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .ficha:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(27, 59, 43, 0.09);
        }

        /* Contenedor de imagen */
        .marco-imagen {
            position: relative;
            width: 100%;
            height: 205px;
            overflow: hidden;
            border-bottom: 1px solid var(--borde);
        }

        .marco-imagen svg,
        .marco-imagen img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .etiqueta-origen {
            position: absolute;
            top: 14px;
            right: 14px;
            z-index: 2;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(4px);
            color: var(--verde-bosque);
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 5px 12px;
            border-radius: 999px;
            border: 1px solid rgba(27, 59, 43, 0.12);
        }

        /* Contenido de la ficha */
        .contenido-ficha {
            padding: 26px 28px 30px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .encabezado-tema {
            margin-bottom: 14px;
            padding-bottom: 14px;
            border-bottom: 1px solid var(--borde);
        }

        .encabezado-tema h2 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--verde-bosque);
            margin: 0 0 2px;
        }

        .subtitulo-tema {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-style: italic;
            font-size: 1.15rem;
            color: var(--dorado-suave);
        }

        .perfil {
            font-size: 0.92rem;
            color: var(--texto-principal);
            margin: 0 0 18px;
        }

        /* Datos técnicos en mini rejilla */
        .especificaciones {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            background: var(--crema);
            padding: 12px 14px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 0.82rem;
        }

        .dato span {
            display: block;
            color: var(--texto-secundario);
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .dato strong {
            color: var(--verde-bosque);
            font-weight: 600;
        }

        .lista-rasgos {
            margin: 0;
            padding-left: 18px;
            color: var(--texto-secundario);
            font-size: 0.88rem;
        }

        .lista-rasgos li {
            margin-bottom: 6px;
        }

        .lista-rasgos li::marker {
            color: var(--dorado-suave);
        }
    </style>
</head>
<body>

<div class="contenedor">
    <header>
        <span class="subtitulo-superior">Plan Hídrico Escolar · Saneamiento y Abasto</span>
        <h1>Soluciones al Desabasto y Contaminación del Agua</h1>
        <p>Estrategias para rehabilitar el uso seguro del pozo, captar agua pluvial y garantizar el servicio continuo e higiénico en los sanitarios del plantel.</p>
    </header>

    <!-- Filtros PHP -->
    <nav class="barra-filtros">
        <a href="?categoria=todas" class="btn-filtro <?= $filtro === 'todas' ? 'activo' : '' ?>">
            Vista completa (<?= count($soluciones_agua) ?>)
        </a>
        <a href="?categoria=diagnostico" class="btn-filtro <?= $filtro === 'diagnostico' ? 'activo' : '' ?>">
            Diagnóstico
        </a>
        <a href="?categoria=infraestructura" class="btn-filtro <?= $filtro === 'infraestructura' ? 'activo' : '' ?>">
            Infraestructura y Filtrado
        </a>
        <a href="?categoria=ahorro" class="btn-filtro <?= $filtro === 'ahorro' ? 'activo' : '' ?>">
            Ahorro en Sanitarios
        </a>
        <a href="?categoria=gestion" class="btn-filtro <?= $filtro === 'gestion' ? 'activo' : '' ?>">
            Gestión e Higiene
        </a>
    </nav>

    <!-- Renderizado de tarjetas -->
    <main class="grid-editorial">
        <?php foreach ($items_filtrados as $item): ?>
            <article class="ficha">
                <div class="marco-imagen">
                    <span class="etiqueta-origen"><?= htmlspecialchars($item['etiqueta']) ?></span>
                    <?= $item['svg'] ?>
                </div>

                <div class="contenido-ficha">
                    <div class="encabezado-tema">
                        <h2><?= htmlspecialchars($item['titulo']) ?></h2>
                        <div class="subtitulo-tema"><?= htmlspecialchars($item['subtitulo']) ?></div>
                    </div>

                    <p class="perfil"><?= htmlspecialchars($item['perfil']) ?></p>

                    <div class="especificaciones">
                        <div class="dato">
                            <span>Impacto esperado</span>
                            <strong><?= htmlspecialchars($item['impacto']) ?></strong>
                        </div>
                        <div class="dato">
                            <span>Implementación</span>
                            <strong><?= htmlspecialchars($item['costo']) ?></strong>
                        </div>
                        <div class="dato" style="grid-column: span 2;">
                            <span>Área de aplicación</span>
                            <strong><?= htmlspecialchars($item['alcance']) ?></strong>
                        </div>
                    </div>

                    <ul class="lista-rasgos">
                        <?php foreach ($item['detalles'] as $detalle): ?>
                            <li><?= htmlspecialchars($detalle) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
        <?php endforeach; ?>
    </main>
</div>

</body>
</html>
</body>
</html>