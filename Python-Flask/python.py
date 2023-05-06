from flask import Flask, send_from_directory
import os

app = Flask(__name__)


def indexer():
    dir_list = [d for d in os.listdir('.') if os.path.isdir(d)]
    result = ""
    for item in dir_list:
        if "index.html" in os.listdir(item):
            result += f'Indexer found an <b>index.html</b> in: <a href="{item}/index.html">{item}</a> <br>'
    return result


@app.route('/')
def index():
    return indexer()


@app.route('/<path:path>')
def static_file(path):
    return send_from_directory('.', path)


if __name__ == '__main__':
    app.run()
