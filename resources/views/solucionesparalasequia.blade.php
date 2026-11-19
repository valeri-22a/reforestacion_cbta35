<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Catálogo de especies botánicas con URLs de imágenes reales
$plantas = [
    [
        'id'          => 'mezquite',
        'nombre'      => 'Mezquite',
        'cientifico'  => 'Prosopis laevigata',
        'categoria'   => 'Nativa',
        'origen'      => 'Nativa de México',
        'altura'      => '8 – 12 m',
        'riego'       => 'Muy bajo (solo 1er año)',
        'floracion'   => 'Primavera (espigas crema)',
        'perfil'      => 'Especie nativa emblemática de porte majestuoso, copa extendida y raíces profundas que fijan nitrógeno al suelo.',
        'detalles'    => [
            'Follaje fino bipinnado que filtra suavemente la luz solar.',
            'Refugio clave para polinizadores y aves locales.',
            'Resiste sequías extremas y heladas ligeras.'
        ],
        'imagen'      => 'https://texashighways.com/wp-content/uploads/2022/06/mesquite-rio-grande-city.jpg'
    ],
    [
        'id'          => 'huizache',
        'nombre'      => 'Huizache',
        'cientifico'  => 'Vachellia farnesiana',
        'categoria'   => 'Nativa',
        'origen'      => 'Nativa de México',
        'altura'      => '4 – 7 m',
        'riego'       => 'Nulo una vez establecido',
        'floracion'   => 'Febrero – Abril (pompones amarillos)',
        'perfil'      => 'Arbusto arborescente rústico de estética silvestre, espinas blancas y flores intensamente aromáticas.',
        'detalles'    => [
            'Produce pompones florales amarillo oro con aroma dulce.',
            'Prospera en suelos pobres, pedregosos o degradados.',
            'Ideal para cercos vivos y jardines de bajo mantenimiento.'
        ],
        'imagen'      => 'https://viverosparota.mx/cdn/shop/files/huizache-natural.png?v=1687300953'
    ],
    [
        'id'          => 'colorin',
        'nombre'      => 'Colorín o Zompantle',
        'cientifico'  => 'Erythrina coralloides',
        'categoria'   => 'Nativa',
        'origen'      => 'Nativa de México',
        'altura'      => '5 – 8 m',
        'riego'       => 'Bajo (pierde hoja en sequía)',
        'floracion'   => 'Marzo – Abril (racimos rojo coral)',
        'perfil'      => 'Árbol escultórico de corteza lisa que pierde sus hojas en invierno para estallar en flores rojas antes de brotar.',
        'detalles'    => [
            'Sus inflorescencias coralinas atraen colibríes en primavera.',
            'Excelente adaptación a jardines soleados y banquetas anchas.',
            'Sus semillas rojas son ornamentales pero tóxicas si se ingieren.'
        ],
        'imagen'      => 'https://peregrineros.wordpress.com/wp-content/uploads/2022/04/arbol-colorin-zompantle-3.jpg?w=800'
    ],
    [
        'id'          => 'duraznero',
        'nombre'      => 'Duraznero criollo',
        'cientifico'  => 'Prunus persica',
        'categoria'   => 'Adaptada',
        'origen'      => 'Naturalizado (Frutal)',
        'altura'      => '4 – 6 m',
        'riego'       => 'Moderado en primavera',
        'floracion'   => 'Febrero – Marzo (flores rosadas)',
        'perfil'      => 'Frutal rústico naturalizado en el altiplano, apreciado por su floración rosada y cosecha de verano.',
        'detalles'    => [
            'Las variedades criollas soportan bien el estiaje con riegos espaciados.',
            'Requiere poda anual en vaso abierto durante enero.',
            'Produce frutos dulces y aromáticos entre junio y agosto.'
        ],
        'imagen'      => 'https://i.pinimg.com/736x/3b/44/2d/3b442d38dbb929324c8eea7f44392da2.jpg'
    ],
    [
        'id'          => 'jacaranda',
        'nombre'      => 'Jacaranda',
        'cientifico'  => 'Jacaranda mimosifolia',
        'categoria'   => 'Adaptada',
        'origen'      => 'Sudamérica (Naturalizada)',
        'altura'      => '12 – 15 m',
        'riego'       => 'Bajo una vez adulta',
        'floracion'   => 'Marzo – Abril (violeta azulado)',
        'perfil'      => 'Especie ornamental de gran impacto visual cuya floración violeta tapiza las avenidas cada primavera.',
        'detalles'    => [
            'Follaje ligero tipo helecho que permite sombra filtrada.',
            'Soporta periodos secos; requiere pleno sol para florecer.',
            'Proteger ejemplares jóvenes de heladas en diciembre-enero.'
        ],
        'imagen'      => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeOdKplWRhZ88FY0AChJJXs8iGkSscJ9yhstvKyBPt6w&s'
    ],
    [
        'id'          => 'fresno',
        'nombre'      => 'Fresno',
        'cientifico'  => 'Fraxinus uhdei',
        'categoria'   => 'Nativa',
        'origen'      => 'Nativa de México',
        'altura'      => '15 – 20 m',
        'riego'       => 'Bajo-Moderado en estiaje',
        'floracion'   => 'Primavera (discreta)',
        'perfil'      => 'Árbol longevo de porte clásico y sombra densa, excelente regulador térmico en parques y terrenos amplios.',
        'detalles'    => [
            'Tronco recto, corteza fisurada y copa amplia verde brillante.',
            'Tolera la sequía estacional con riegos profundos en primavera.',
            'Requiere espacio amplio (4-5 m lejos de muros) por sus raíces.'
        ],
        'imagen'      => 'https://gwskkionlcojfhfjamix.supabase.co/storage/v1/object/public/plantas-images/1775421987779.jpg'
    ]
];

// Filtro por categoría mediante GET
$filtro = isset($_GET['categoria']) ? $_GET['categoria'] : 'todas';
$plantas_filtradas = array_filter($plantas, function($planta) use ($filtro) {
    if ($filtro === 'todas') return true;
    return strtolower($planta['categoria']) === strtolower($filtro);
});
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Botánico Seleccionado</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,500&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --crema: #faf8f5;
            --tarjeta: #ffffff;
            --verde-bosque: #1b3b2b;
            --verde-salvia: #4a6b58;
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
            max-width: 720px;
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
        .grid-botanico {
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
            height: 220px;
            overflow: hidden;
            background-color: #ebe6de;
            border-bottom: 1px solid var(--borde);
        }

        .marco-imagen img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform 0.45s ease;
        }

        .ficha:hover .marco-imagen img {
            transform: scale(1.04);
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

        .encabezado-especie {
            margin-bottom: 14px;
            padding-bottom: 14px;
            border-bottom: 1px solid var(--borde);
        }

        .encabezado-especie h2 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--verde-bosque);
            margin: 0 0 2px;
        }

        .nombre-cientifico {
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
        <h1>arboles aptos para sembrar</h1>
        <p>Selección de árboles nativos y adaptados de alto valor ornamental y ecológico, ideales para entornos</p>
    </header>

    <!-- Filtros PHP -->
    <nav class="barra-filtros">
        <a href="?categoria=todas" class="btn-filtro <?= $filtro === 'todas' ? 'activo' : '' ?>">
            Todas las especies (<?= count($plantas) ?>)
        </a>
    </nav>

    <!-- Renderizado de tarjetas -->
    <main class="grid-botanico">
        <?php foreach ($plantas_filtradas as $planta): ?>
            <article class="ficha">
                <div class="marco-imagen">
                    <span class="etiqueta-origen"><?= htmlspecialchars($planta['origen']) ?></span>
                    <img 
                        src="<?= htmlspecialchars($planta['imagen']) ?>" 
                        alt="<?= htmlspecialchars($planta['nombre'] . ' - ' . $planta['cientifico']) ?>"
                        loading="lazy"
                    >
                </div>

                <div class="contenido-ficha">
                    <div class="encabezado-especie">
                        <h2><?= htmlspecialchars($planta['nombre']) ?></h2>
                        <div class="nombre-cientifico"><?= htmlspecialchars($planta['cientifico']) ?></div>
                    </div>

                    <p class="perfil"><?= htmlspecialchars($planta['perfil']) ?></p>

                    <div class="especificaciones">
                        <div class="dato">
                            <span>Altura máxima</span>
                            <strong><?= htmlspecialchars($planta['altura']) ?></strong>
                        </div>
                        <div class="dato">
                            <span>Demanda hídrica</span>
                            <strong><?= htmlspecialchars($planta['riego']) ?></strong>
                        </div>
                        <div class="dato" style="grid-column: span 2;">
                            <span>Floración</span>
                            <strong><?= htmlspecialchars($planta['floracion']) ?></strong>
                        </div>
                    </div>

                    <ul class="lista-rasgos">
                        <?php foreach ($planta['detalles'] as $rasgo): ?>
                            <li><?= htmlspecialchars($rasgo) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
        <?php endforeach; ?>
    </main>
</div>

</body>
</html>
<a href=" {{ route('soluciones') }}">contaminacion</a>
</body>
</html>
