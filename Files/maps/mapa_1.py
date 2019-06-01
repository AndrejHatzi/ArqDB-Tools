import pandas as pd
import folium

brasil = folium.Map(
    location=[-16.1237611, -59.9219642],    # Coordenadas retiradas do Google Maps
    zoom_start=4
)

folium.Marker(
    location=[39.462094, -8.387384],
    icon=folium.Icon(color="lightred"),
    popup='Almoroul',
).add_to(brasil)

brasil.save('index.html')
#lightgreen', 'darkred', 'white', 'purple', 'orange',
#'blue', 'lightgrayblack', 'lightblue', 'gray', 'red', 'green',
#'darkpurple', 'darkgreen', 'cadetblue', 'darkblue', 'pink', 'beige',
#'lightred
