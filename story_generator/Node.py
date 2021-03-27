class Node:
    def __init__(self, id, text):
        self.id = id
        self.text = text
        self.nexts = []
        self.edges = []

    def setText(self, text):
        self.text = text
    
    def setId(self, id):
        self.id

    def getText(self):
        return self.text

    def getId(self):
        return self.id

