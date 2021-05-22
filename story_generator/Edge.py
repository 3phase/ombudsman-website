class Edge:
    def __init__(self, start_id, next_id, popularity, trust, energy, unlocking_trust):
        self.start_id = start_id
        self.next_id = next_id
        self.popularity = popularity
        self.trust = trust
        self.energy = energy
        self.unlocking_trust = unlocking_trust

    def getPopularity(self):
        return self.popularity

    def getTrust(self):
        return self.trust

    def getEnergy(self):
        return self.energy

    def getUnlockingTrust(self):
        return self.unlocking_trust
    