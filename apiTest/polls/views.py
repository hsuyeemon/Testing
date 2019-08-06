from django.shortcuts import render

# Create your views here.
import requests

#def home(request):
 #   response = requests.get('http://api.ipstack.com/65.18.122.3?access_key=d1bc0534cd2ecd11a5ad7ee1ffeb20e7')
  #  geodata = response.json()
   # return render(request, 'home.html', {
    #    'ip': geodata['ip'],
     #   'country': geodata['country_name']
    #})

def home(request):
    #ip_address = request.META.get('HTTP_X_FORWARDED_FOR', '')
    ip_address = '65.18.122.3'
    print(ip_address)
    response = requests.get('http://api.ipstack.com/%s?access_key=d1bc0534cd2ecd11a5ad7ee1ffeb20e7' % ip_address)
    geodata = response.json()
    return render(request, 'home.html', {
        'ip': geodata['ip'],
        'country': geodata['country_name'],
        'latitude': geodata['latitude'],
        'longitude': geodata['longitude'],
        'api_key': 'AIzaSyC1UpCQp9zHokhNOBK07AvZTiO09icwD8I'  # Don't do this! This is just an example. Secure your keys properly.
    })