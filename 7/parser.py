from bs4 import BeautifulSoup
import requests

def parse():
    URL = 'https://uni-dubna.ru/'
    HEADERS = {
        'User_Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36'
    }
    response = requests.get(URL, headers = HEADERS)
    soup = BeautifulSoup(response.content, 'html.parser')
    items = soup.findAll('div', class_ = 'card__content')
    comps = []

    for item in items:
        comps.append({
            'title': item.find('a', class_ = 'card__showmore').get_text(strip = True),
            'link': item.find('a', class_ = 'card__showmore').get('href')
        })

        for comp in comps:
            print(f"{comp['title']} -> Link: {URL}{comp['link']}")
parse()